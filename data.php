<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Data Pendaftaran</title>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <meta charset="utf-8">
</head>  
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<body>  
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2">
     <h3 class="text-center">Data Pendaftar Tahun Ajaran 22/23</h3>    
      <table class="table table-bordered mt-4" style="display:none;">  
     </div>
   </div>
 </div>
 

 <div class="container">
  <div class="row">
    <div class="col 6">
      <div id="show-data"></div>
    </div>
  </div>



 <script>
 $(document).ready(() => {
  
  const $showData = $('#show-data');
  const $raw = $('pre');

  $('#get-data').on('click', (event) => {
    //  jangan refresh halaman    
    event.preventDefault(); 

    $showData.text('Loading the JSON file.');

    // get json di endpoint
    $.getJSON('/tugas/json.php', (respon) => {
      console.log(respon.code);
      console.log(respon.status);
      
      // mengatur ulang format respon dari json menjadi html
      const head = ''
      const markup = respon.data
        .map(item => `<tr id="${item.id}" class="id"><td>
           ${item.id}.
            </td><td>${item.Nama}</td></tr>`)
        .join('');

      const list = $('<table />').html(head + markup);

      // tampilkan di kolom ke dua
      $showData.html(list);

     
    $('.surat').on('click', function (event) {
        console.log($(event.target).data("nomer"));
    });


    });
  });
  
 });

  </script>

</body>  
</html>  