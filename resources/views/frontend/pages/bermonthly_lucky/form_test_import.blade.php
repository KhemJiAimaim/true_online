@extends('frontend.layouts.main')
@section('content')
<div class="text-left mt-20">
  <div class="flex flex-col justify-center m-10 gap-4">
    <div class="flex justify-center m-10 gap-4">
      <label for="excel">Excel</label>
      <input type="file" id="excel-file">
      <button class="bg-green-600 text-white rounded-lg px-2 py-1" id="submit">UPLOAD</button>
    </div>

    <button id="export-file" class="bg-red-600 text-white mx-auto flex justify-center w-40 rounded-lg px-2 py-1">EXPORT FILE</button>
    <button id="getData" class="bg-red-600 text-white mx-auto flex justify-center w-40 rounded-lg px-2 py-1">GETDATA</button>
  </div>
</div>

@endsection

@section('scripts')
<script>
  let getData = document.querySelector('#getData');
  getData.addEventListener('click', () => {
    axios.get('http://localhost/true.api/').then((response) => {
      console.log(response);
    })
  })
  let submit = document.querySelector('#submit');
  
  submit.addEventListener('click', function() {
    let formData = new FormData();
    let excelFile = document.querySelector('#excel-file').files[0];
    if(!excelFile) {
      return false;
    } 
    formData.append('excel_file', excelFile);

    // axios.post(`backoffice/v1/readexcel`,formData).then((response) => {
    axios.post(`/readexcel`,formData).then((response) => {
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: response.data.message,
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          location.href = "/bermonthly"
        })
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "upload data failed",
          showConfirmButton: false
        })
      }
    })
  })

  const export_file = document.querySelector('#export-file');

  export_file.addEventListener('click', function() {
    location.href = "/exportexcel"
    // axios.get(`/exportexcel`).then((response) => {
    //   console.log(response);
    // })
  })
</script>
@endsection