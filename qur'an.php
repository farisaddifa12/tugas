<!doctype html>
<html lang="en">    
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="qur'an.css">
  <meta charset="utf-8">
  <title>Al-Qur'an</title>
  <style>
    header {
      background-color: forestgreen;
      
    }
    td {
    border: 1px solid black;
    margin: 10px;
    padding: 10px;
    color: forestgreen;
    }

    h1 {
      font-size: 30px;
      color: white;
      margin: 5px;
    }

    li {
      text-align:left;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="fs-4">Mari Membaca Al-Qur'an</h1>
      </a>
    </header>
</div>
<body>
   <div class="container"> 

      <a href="#" id="get-data" class="d-flex flex-wrap justify-content-center py-3 mb-4"></a>
      </div>
   </div>
  <div class="container">
    <div class="row">
      <div class="col 6">
        <h2>Daftar Surat</h2>
        <div id="show-data"></div>
      </div>
      <div class="col 6">
        <h2>Daftar Ayat</h2>
        <div id="show-ayat"></div>
      </div>
  </div>
  <div id="show-data"></div>
  


    <script>
   $(document).ready(() => {
  
  const $showData = $('#show-data');
  const $ayatullah = $('#show-ayat');
  const $raw = $('pre');

  // $('#get-data').on('click', (event) => {
  //    jangan refresh halaman    
  // event.preventDefault(); 

    $showData.text('Loading the JSON file.');

    // get json di endpoint
    $.getJSON('https://api.alquran.cloud/v1/surah', (respon) => {
      // console.log(respon.code);
      // console.log(respon.status);
     
      // mengatur ulang format respon dari json menjadi html
      const head = ''
      const markup = respon.data
        .map(item => `<tr id="${item.number}" class="surat"><td>
           ${item.number}.
            </td><td>${item.name}</td></tr>`)
        .join('');

      const list = $('<table / >').html(head + markup);

      // tampilkan di kolom ke dua
      $showData.html(list);

     
    $('.surat').on('click', function (event) {
     
      var id = $(this).attr('id')
    $.getJSON('https://api.alquran.cloud/v1/surah/'+ id +'?offset=0&limit=10', (respond) => {
      console.log(respond.code);
      console.log(respond.status);

      const ayatullah = respond.data.ayahs
        .map(item => `<li>${item.text}
            </li>`)
        .join('');

      const ayat = $('<table / >').html(ayatullah);

      // tampilkan di kolom ke dua
      $ayatullah.html(ayat);
    });
  });


    });
  });
  
  
// });

</script>
 
</body>
</html>
