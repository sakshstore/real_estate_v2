@extends('layouts.app-master')

@section('title')
    Lead
@endsection

@section('content')




   
                 
                  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-book_a_private_tour-tab" data-bs-toggle="tab" data-bs-target="#nav-book_a_private_tour" type="button" role="tab" aria-controls="nav-book_a_private_tour" aria-selected="true">Book a private tour</button>
    <button class="nav-link" id="nav-call_me_back-tab" data-bs-toggle="tab" data-bs-target="#nav-call_me_back" type="button" role="tab" aria-controls="nav-call_me_back" aria-selected="false">Call me back</button>
    <button class="nav-link" id="nav-download_brochure-tab" data-bs-toggle="tab" data-bs-target="#nav-download_brochure" type="button" role="tab" aria-controls="nav-download_brochure" aria-selected="false">Download  brochure</button>



  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-book_a_private_tour" role="tabpanel" aria-labelledby="nav-book_a_private_tour-tab" tabindex="0">

  @include('lead.table', ['leads_data' => $leads['book_a_private_tour']])
      
      
      </div>
  <div class="tab-pane fade" id="nav-call_me_back" role="tabpanel" aria-labelledby="nav-call_me_back-tab" tabindex="0">
      

  @include('lead.table', ['leads_data' => $leads['call_me_back']])
  </div>
  <div class="tab-pane fade" id="nav-download_brochure" role="tabpanel" aria-labelledby="nav-download_brochure-tab" tabindex="0">
      

  @include('lead.table', ['leads_data' => $leads['download_brochure']])
  </div>
  
</div>
             
@endsection



@section('style')





        <link href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet" />
      
      
      
      

        <link href="//cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet" />
      
      
      
       <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/keytable/2.10.0/css/keyTable.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/scroller/2.2.0/css/scroller.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/searchbuilder/1.5.0/css/searchBuilder.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/searchpanes/2.2.0/css/searchPanes.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/staterestore/1.3.0/css/stateRestore.dataTables.min.css" rel="stylesheet">
 
@endsection




@section('scripts')
 
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.7.0/js/dataTables.colReorder.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/keytable/2.10.0/js/dataTables.keyTable.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>




<script src="https://cdn.datatables.net/scroller/2.2.0/js/dataTables.scroller.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.5.0/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.2.0/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/staterestore/1.3.0/js/dataTables.stateRestore.min.js"></script>
 


<script>
     
    $(document).ready( function () {
 
    
    
    
    $('.table').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'colvis',
        'excel',
        'print'
    ]
} );




} );


</script>




@endsection




