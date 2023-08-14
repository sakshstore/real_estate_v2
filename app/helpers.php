<?php

use App\Models\Property;

use App\Models\Page;

use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

use Netflie\WhatsAppCloudApi\Message\Media\LinkID;
use Netflie\WhatsAppCloudApi\Message\Media\MediaObjectID;

use Netflie\WhatsAppCloudApi\Message\Template\Component;
use Carbon\Carbon;

use App\Models\Post;

use App\Models\AutoPost;

use App\Models\BulkMessage;

if (!function_exists("get_message_from_chatgpt")) {
    function get_message_from_chatgpt($message)
    {
        Log::debug("CHAT GPT REQUEST" . __LINE__ . $message);

        $token = env("CHAT_GPT_AUTH_KEY");
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.openai.com/v1/chat/completions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>
                '{"model": "gpt-3.5-turbo",
"messages": [{"role": "user", "content":  "' .
                $message .
                '" }],
"temperature": 0.7
}',

            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . $token,
                "Content-Type: application/json",
            ],
        ]);

        $response = curl_exec($curl);

        Log::debug("CHAT GPT RESPONSE" . __LINE__ . $response);

        file_put_contents(
            "chatgpt.txt",
            $message . "_____" . $response,
            FILE_APPEND | LOCK_EX
        );

        $res = json_decode($response);

        $mes = $res->choices[0];

        $message_content = $res->choices[0]->message->content;

        curl_close($curl);
        return $message_content;
    }
}

if (!function_exists("plural_from_model")) {
    function plural_from_model($model)
    {
        $plural = Str::plural(class_basename($model));

        return Str::kebab($plural);
    }
}

if (!function_exists("get_price")) {
    function get_price($property)
    {
        $price_array = json_decode($property->starting_price);

        return $price_array->usd . " USD  or " . $price_array->aed . " AED";

        //  return  number_format($price_array->usd) ." USD " . number_format($price_array->aed )." AED" ;
    }
}

if (!function_exists("get_value_array_from_tag")) {
    function get_value_array_from_tag($tag_str)
    {
        $tags = [];

        $tag_array = json_decode($tag_str);

        if (is_array($tag_array)) {
            foreach ($tag_array as $tag_element) {
                array_push($tags, $tag_element->value);
            }
        }
        return $tags;
    }
}

/*
[{"name":"International Airport","distance":"26 Minute"},{"name":"burj khalifa","distance":"27 Minute"},{"name":"palm jumeirah","distance":"37 Minute"},{"name":"School","distance":"21 Minute"},{"name":"Doctor","distance":"20 Minute"}]


*/

if (!function_exists("get_connectivity_tags")) {
    function get_connectivity_tags()
    {
        $connectivity_array = [
            "School",
            "Hospital",
            "Airport",
            "Metro Station",
        ];

        $properties = Property::select("connectivities")
            ->whereNotNull("connectivities")
            ->get();

        foreach ($properties as $property) {
            $connectivities_array = json_decode($property->connectivities);

            foreach ($connectivities_array as $connectivity_element) {
                array_push($connectivity_array, $connectivity_element->name);
            }
        }

        return array_unique($connectivity_array);
    }
}

if (!function_exists("get_amminities_tags")) {
    function get_amminities_tags()
    {
        $amminities_array = [
            "Day Care Centers",
            "Children's Playground",
            "Fitness Center",
            "Swimming Pool",
            "Yoga Area",
            "24-hr Security",
        ];

        $properties = Property::select("aminities")
            ->whereNotNull("aminities")
            ->get();

        foreach ($properties as $amminity) {
            array_push($amminities_array, $amminity->aminities);
        }

        $str = implode(",", $amminities_array);

        $ar = array_unique(explode(",", $str));

        return $ar;
    }
}

if (!function_exists("get_page")) {
    function get_page($slug)
    {
        $page = Page::where("slug", $slug)->first();

        return $page;
    }
}

if (!function_exists("saksh_isset")) {
    function saksh_isset($str)
    {
        if (!empty($str)) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists("get_ai_contents")) {
    function get_ai_contents($str, $type)
    {
        $content = get_message_from_chatgpt($str);

        return $content;
    }
}

if (!function_exists("get_lead_list_by_tags")) {
    function get_lead_list_by_tags($tags)
    {
        $tags = "tag1,tag2";
        $tag_array = explode(",", $tags);

        Log::debug("___" . __LINE__);

        $query = " select * from leads   where   ";

        $i = 0;
        $query .= " ( ";
        foreach ($tag_array as $tag) {
            if ($i == 0) {
                $query = $query . "  (  tags like  '%" . $tag . "%' ) ";
            } else {
                $query = $query . " OR   (  tags like  '%" . $tag . "%'  )";
            }
            $i++;
        }

        $query .= " )  ";

        Log::debug("___" . $query);

        Log::debug("___" . __LINE__);

        $data = DB::select($query);

        Log::debug("___" . print_r($data, true));

        return $data;
    }
}

if (!function_exists("Send_schedules_Wapp_messages")) {
    function Send_schedules_Wapp_messages()
    {
        $from = Carbon::now();
        $to = Carbon::now()->addMinute(111111);

        $credential = [
            "from_phone_number_id" => DotenvEditor::getValue(
                "WHATSAPP_FROM_PHONE_NUMBER_ID"
            ),
            "access_token" => DotenvEditor::getValue("WHATSAPP_ACCESS_TOKEN"),
        ];

        Log::debug("___" . __LINE__);

        Log::debug("___" . $from);

        Log::debug("___" . $to);

        $massMessage = BulkMessage::whereBetween("scheduled_at", [
            $from,
            $to,
        ])->first();

        Log::debug("___" . __LINE__);

        Log::debug(print_r($massMessage, true));

        if ($massMessage) {
            $leads = get_lead_list_by_tags($massMessage->lead_tags);

            Log::debug(print_r($leads, true));

            Log::debug("___" . __LINE__);

            foreach ($leads as $request) {
                $message = $massMessage->content;
                $to = $request->phone;

                Log::debug("___" . __LINE__);
                // send2WappV3($to,$message,$credential);
                //   sendEmail($to,$message,$credential);
                sendlog($to, $message, $credential);

                Log::debug("___" . __LINE__);
            }
        }
    }
}

if (!function_exists("sendlog")) {
    function sendlog($to, $body, $credential)
    {
        Log::debug("sendlog___" . print_r($to, true));

        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($to, true));
        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($body, true));

        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($credential, true));

        Log::debug("sendlog___" . __LINE__);
    }
}
if (!function_exists("send2WappV3")) {
    function send2WappV3($to, $body, $credential)
    {
        Log::debug("___" . print_r($to, true));

        Log::debug("___" . __LINE__);

        Log::debug("___" . print_r($to, true));
        Log::debug("___" . __LINE__);

        Log::debug("___" . print_r($body, true));

        Log::debug("___" . __LINE__);

        Log::debug("___" . print_r($credential, true));

        Log::debug("___" . __LINE__);

        $whatsapp_cloud_api = new WhatsAppCloudApi($credential);

        //$result=$whatsapp_cloud_api->sendTemplate('+'.$to, 'hello_world', 'en_US');

        $result = $whatsapp_cloud_api->sendTextMessage("+" . $to, $body);

        return $result;
    }
}

if (!function_exists("process_auto_posts")) {
    function process_auto_posts()
    {
        $from = Carbon::now();
        $to = Carbon::now()->addMinute(111111);

        //  $auto_posts = AutoPost::whereBetween('scheduled_at', [$from, $to])->get();

        $auto_posts = AutoPost::all();

        Log::debug("___" . __LINE__);

        Log::debug(print_r($auto_posts, true));

        if ($auto_posts) {
            foreach ($auto_posts as $request) {
                $keywords = $request->keywords;

                $title = get_ai_contents($keywords, "title");
                $content = get_ai_contents($keywords, "content");
                $image = get_ai_contents($keywords, "image");

                $post = new Post();

                $post->title = $title;

                $post->content = $content;

                $post->tags = $request->tags;

                $post->user_id = 109;

                $post->save();

                $request->status = "completed";

                $request->post_id = $post->id;

                $request->save();
            }
        }
    }
}

if (!function_exists("sendlog")) {
    function sendlog($to, $body, $credential)
    {
        Log::debug("sendlog___" . print_r($to, true));

        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($to, true));
        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($body, true));

        Log::debug("sendlog___" . __LINE__);

        Log::debug("sendlog___" . print_r($credential, true));

        Log::debug("sendlog___" . __LINE__);
    }
}

if (!function_exists("monitor_cron_job")) {
    function monitor_cron_job()
    {
        $file = storage_path("monitor_cron_job.txt");

        $date = Carbon::now();

        $str = $date . " (" . $date->tzName . ")";

        file_put_contents($file, $str);
    }
}

if (!function_exists("last_cron_run_time")) {
    function last_cron_run_time()
    {
        $file = storage_path("monitor_cron_job.txt");

        return file_get_contents($file);
    }
}

if (!function_exists("current_time")) {
    function current_time()
    {
        $date = Carbon::now();

        $str = $date . " (" . $date->tzName . ")";

        return $str;
    }
}

function print_select_fiel($a, $custom_field)
{
    echo $a->label;

    $key = $a->name;
    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo "   <select class= '" .
        $a->className .
        "'   name= '" .
        $a->name .
        "' > ";

    foreach ($a->values as $row) {
        $selected = "";
        if ($value == $row->value) {
            $selected = "selected";
        }

        echo "<option value='" . $row->value . "' " . $selected . ">";
        echo $row->label;
        echo "</option >";
    }

    echo "     </select> ";
}

function print_radio_field($a, $custom_field)
{
    echo $a->label;

    $key = $a->name;

    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo "  <div> ";

    foreach ($a->values as $row) {
        $checked = "";
        if ($value == $row->value) {
            $checked = "checked";
        }

        echo "   <input type='radio'   name= '" .  $a->name . "'  value= '" .   $row->value .   "' " .    $checked . "  >";

        echo " <label for= '" . $row->label . "' > " .  $row->label . "</label><br>";
    }

    echo "     </div> ";
}

function print_checkbox_group_field($a, $custom_field)
{
    echo $a->label;

    $key = $a->name;

    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo "  <fieldset id='group2'>";

    foreach ($a->values as $row) {
        $checked = "";
        if ($value == $row->value) {
            $checked = "checked";
        }

        echo "   <input type='checkbox'   name= '" .  $a->name . "'  value= '" . $row->value . "' " .   $checked . "  >";

        echo " <label for= '" . $row->label .     "' > " .  $row->label .  "</label><br>";
    }

    echo "    </fieldset > ";
}

function print_number_field($a, $custom_field)
{
    $key = $a->name;

    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo $a->label;
    echo "<input type='" .   $a->type .  "' value='" .   $value . "'  class= '" . $a->className . "'  name= '" .    $a->name . "'    />";
}

function print_text_field($a, $custom_field)
{
    $key = $a->name;

    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo $a->label;
    echo "<input type='" . $a->type .   "' value='" .  $value .  "'  class= '" .  $a->className . "'  name= '" .  $a->name .   "'    />";
}

function print_date_field($a, $custom_field)
{
    $key = $a->name;

    $value = "";

    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo $a->label;
    echo "<input type='" . $a->type . "' value='" .  $value .  "'  class= '" .  $a->className .  "'  name= '" . $a->name . "'    />";
}

function print_hidden_field($a, $custom_field)
{
    if (isset($custom_field->$key)) {
        $value = $custom_field->$key;
    }

    echo "<input type='text' name= '" . $a->name . "' value='" . $value . "' />";
}

function print_form($form_array, $data_json)
{
    $custom_field = $data_json;

    $ar = $form_array;

    foreach ($ar as $a) {
        echo "<hr />";

        if ($a->type == "select") {
            print_select_fiel($a, $custom_field);
        } elseif ($a->type == "checkbox-group") {
            print_checkbox_group_field($a, $custom_field);
        } elseif ($a->type == "radio-group") {
            print_radio_field($a, $custom_field);
        } elseif ($a->type == "text") {
            print_text_field($a, $custom_field);
        } elseif ($a->type == "number") {
            print_number_field($a, $custom_field);
        } elseif ($a->type == "date") {
            print_date_field($a, $custom_field);
        } elseif ($a->type == "hidden") {
            print_hidden_field($a, $custom_field);
        }
    }
}



	     
									     function print_form_json_data( $form_json){
				  $data= json_decode( $form_json );
				  
				  if(!is_array($data)) return "";
			//	  print_r($data);
				  foreach($data as  $x => $val)
				  {
				       
				      echo "<hr />";
				      
				     echo $x;
				//  var_dump($x);
				  echo "   ";
				  if(is_string($val)) echo $val;
			
		 
				      
				  }
		 
									     }
									     
									     