
document.addEventListener('DOMContentLoaded', function () {
  // Init Select2
  const countrySelect = document.getElementById('country');
  if (countrySelect) {
    $('#country').select2({
      theme: 'bootstrap-5',
    });
  }

  // Handle validation errors
  if (window.pageData?.errors?.length > 0) {
    const errorList = window.pageData.errors
      .map(e => `<li>${e}</li>`)
      .join('');
    Swal.fire({
      title: 'Validation Error',
      html: `<ul>${errorList}</ul>`,
      icon: 'error',
      confirmButtonText: 'OK'
    });
  }

  // Handle success message
  if (window.pageData?.success) {
    Swal.fire({
      title: 'Success!',
      text: window.pageData.success,
      icon: 'success',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.reload();
      }
    });
  }
});
