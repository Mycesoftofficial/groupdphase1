@if($errors->any())
<div id="error-message" class="alert alert-danger center">
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif
@if(session('error'))
  <div id="error-message" class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif

{{-- <script>
  setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
      errorMessage.style.display = 'none';
    }
  }, 5000); // Adjust the timeout value (in milliseconds) as needed
</script> --}}

{{-- success message --}}
@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<script>
  setTimeout(function() {
      var errorMessage = document.getElementById('error-message');
      var successMessage = document.getElementById('success-message');

      if (errorMessage) {
          errorMessage.style.display = 'none';
      }

      if (successMessage) {
          successMessage.style.display = 'none';
      }
  }, 5000); // Adjust the timeout value (in milliseconds) as needed
</script>


