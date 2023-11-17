@extends('frontend.layouts.main')
@section('content')
<div class="text-left mt-20">
  <div class="flex justify-center m-10 gap-4">
    <label for="excel">Excel</label>
    <input type="file" id="excel-file">
    <button id="submit">ส่ง</button>
  </div>
</div>

@endsection

@section('scripts')
<script>
  let submit = document.querySelector('#submit');
  
  submit.addEventListener('click', function() {
    let formData = new FormData();
    let excelFile = document.querySelector('#excel-file').files[0];
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
</script>
@endsection