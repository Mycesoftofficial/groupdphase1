<!-- Your existing HTML code -->

<!-- success Popup html Start -->
<button
  type="button"
  id="success-modal-btn"
  hidden
  data-toggle="modal"
  data-target="#success-modal"
  data-backdrop="static"
>
  Launch modal
</button>

<div
  class="modal fade"
  id="success-modal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div
    class="modal-dialog modal-dialog-centered max-width-400"
    role="document"
  >
    <div class="modal-content">
      <div class="modal-body text-center font-18">
        <h3 class="mb-20">Form Submitted!</h3>
        <div class="mb-30 text-center">
          <img src="vendors/images/success.png" />
        </div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
        eiusmod
      </div>
      <div class="modal-footer justify-content-center">
        <!-- Add an ID to the "Done" button -->
        <button type="button" class="btn btn-primary" id="done-btn">Done</button>
      </div>
    </div>
  </div>
</div>
			<script>
				// Get the "Done" button element
				const doneBtn = document.getElementById("done-btn");
			  
				// Get the form element
				const form = document.querySelector(".tab-wizard2");
			  
				// Function to handle form submission
				function handleSubmit(event) {
				  event.preventDefault();
				  // Your additional code to handle form submission, if needed
				  // For example, you can submit the form programmatically using form.submit()
				  form.submit();
				}
			  
				// Add click event listener to the "Done" button
				doneBtn.addEventListener("click", handleSubmit);
			  </script>