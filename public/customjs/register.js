	// Get the elements from Step 1
    const churchNameInput = document.querySelector("input[name='church_name']");
    const churchCodeInput = document.querySelector("input[name='church_code']");
    const locationInput = document.querySelector("input[name='location']");
    const gpsAddressInput = document.querySelector("input[name='gps_address']");
    
    // Get the elements from Step 2
    const districtSelect = document.querySelector("select[name='district']");
    const areaSelect = document.querySelector("select[name='area']");
    const passwordInput = document.querySelector("input[name='password']");
    const confirmPasswordInput = document.querySelector("input[name='password_confirmation']");
    
    // Get the elements from Step 3
    const overviewList = document.getElementById("overview-list");
    
    // Function to update the overview information
    function updateOverview() {
      overviewList.innerHTML = `
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">Church Name</div>
            <div class="col-sm-8">${churchNameInput.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">Church Code</div>
            <div class="col-sm-8">${churchCodeInput.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">Location</div>
            <div class="col-sm-8">${locationInput.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">GPS Address</div>
            <div class="col-sm-8">${gpsAddressInput.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">District</div>
            <div class="col-sm-8">${districtSelect.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">Area</div>
            <div class="col-sm-8">${areaSelect.value}</div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-4 weight-600">Password</div>
            <div class="col-sm-8">.....000</div> <!-- Since passwords should not be displayed, replace with dots -->
          </div>
        </li>
      `;
    }
    
    // Update the overview information whenever there is a change in any input field
    churchNameInput.addEventListener("input", updateOverview);
    churchCodeInput.addEventListener("input", updateOverview);
    locationInput.addEventListener("input", updateOverview);
    gpsAddressInput.addEventListener("input", updateOverview);
    districtSelect.addEventListener("change", updateOverview);
    areaSelect.addEventListener("change", updateOverview);
    
    // You can add more event listeners for other input fields if needed
    