<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Al-Qur'an</title>
  <style>
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

    <a href="#" id="get-data">Klik untuk baca qur'an</a>
    <div id="show-data">
    </div>

    <script>
    $(document).ready(() => {
  
  const $showData = $('#show-data');
  const $raw = $('pre');

  $('#get-data').on('click', (event) => {
    //  jangan refresh halaman    
    event.preventDefault(); 

    $showData.text('Loading the JSON file.');

    $.getJSON('https://api.alquran.cloud/v1/surah', (respon) => {
      console.log(respon.code);
      console.log(respon.status);
      const markup = respon.data
        .map(item => `<li>${item.number}: ${item.name}</li>`)
        .join('');

      const list = $('<ul />').html(markup);

      $showData.html(list);

      $raw.text(JSON.stringify(data, undefined, 2));
    });
  });
  
});</script>
 
</body>
</html>
