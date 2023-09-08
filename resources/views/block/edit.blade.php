@extends('layouts.app-master')

@section('title')
    Update Block
@endsection

@section('content')
 
 
 
             
              
                     <span class="header">Update block</span>
                
                
            <form action="{{ route('update_avatar_block',$block->id ) }}"
      class="dropzone"
      id="avatar_block">
    
        @csrf
      
      
      
</form>
 
 
 
 <div id=editor></div>
 <hr />
         
                        <form method="POST" action="{{ route('blocks.update', $block->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('block.form')

                        </form>
                        
                        
    </section>
@endsection



  @section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
 
 <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
         
                         
              <style>
                  /* Loosely based on the Midnight Textmate theme */

.cm-s-night.CodeMirror { background: #0a001f; color: #f8f8f8; }
.cm-s-night div.CodeMirror-selected { background: #447; }
.cm-s-night .CodeMirror-line::selection, .cm-s-night .CodeMirror-line > span::selection, .cm-s-night .CodeMirror-line > span > span::selection { background: rgba(68, 68, 119, .99); }
.cm-s-night .CodeMirror-line::-moz-selection, .cm-s-night .CodeMirror-line > span::-moz-selection, .cm-s-night .CodeMirror-line > span > span::-moz-selection { background: rgba(68, 68, 119, .99); }
.cm-s-night .CodeMirror-gutters { background: #0a001f; border-right: 1px solid #aaa; }
.cm-s-night .CodeMirror-guttermarker { color: white; }
.cm-s-night .CodeMirror-guttermarker-subtle { color: #bbb; }
.cm-s-night .CodeMirror-linenumber { color: #f8f8f8; }
.cm-s-night .CodeMirror-cursor { border-left: 1px solid white; }

.cm-s-night span.cm-comment { color: #8900d1; }
.cm-s-night span.cm-atom { color: #845dc4; }
.cm-s-night span.cm-number, .cm-s-night span.cm-attribute { color: #ffd500; }
.cm-s-night span.cm-keyword { color: #599eff; }
.cm-s-night span.cm-string { color: #37f14a; }
.cm-s-night span.cm-meta { color: #7678e2; }
.cm-s-night span.cm-variable-2, .cm-s-night span.cm-tag { color: #99b2ff; }
.cm-s-night span.cm-variable-3, .cm-s-night span.cm-def, .cm-s-night span.cm-type { color: white; }
.cm-s-night span.cm-bracket { color: #8da6ce; }
.cm-s-night span.cm-builtin, .cm-s-night span.cm-special { color: #ff9e59; }
.cm-s-night span.cm-link { color: #845dc4; }
.cm-s-night span.cm-error { color: #9d1e15; }

.cm-s-night .CodeMirror-activeline-background { background: #1C005A; }
.cm-s-night .CodeMirror-matchingbracket { outline:1px solid grey; color:white !important; }

              </style>  
                
          
@endsection
@section('scripts')
      

 <!-- Create a simple CodeMirror instance -->
<link rel="stylesheet" href="/plugins/codemirror-5.65.15/lib/codemirror.css">
<script src="/plugins/codemirror-5.65.15/lib/codemirror.js"></script>
<script src="https://codemirror.net/5/keymap/vim.js"></script>


 <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("saksh_content"), {
      lineNumbers: true,
      theme: "night",
      extraKeys: {
        "F11": function(cm) {
          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
        },
        "Esc": function(cm) {
          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
        }
      }
    });
  </script>



 
 
 
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

 <script>
 var options={
     
       
      acceptedFiles: ".jpeg,.jpg,.png"
     
 };
 
 
 let myavatar=new Dropzone("#avatar_block" ,options  );


  mockFile = { name: '{{ $block->thumbnail}}'  };
  
  
 myavatar.displayExistingFile(mockFile, '{{asset(  $block->thumbnail)}}');
 
 
 
  
  </script>
        
@endsection

