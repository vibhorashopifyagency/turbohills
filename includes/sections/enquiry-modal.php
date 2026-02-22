<!-- Enquiry Modal section Start-->
<div class="modal enquiry-modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                </svg>
            </button>
            
            <div class="modal-body">
                <h4 class="modal-title" id="enquiryModalLabel">We’d Love to Hear From You!</h4>
                <form id="enquiry-form" class="enquiry-form-wrapper" action="#" onsubmit="return false;">
                    <div class="row g-4 mb-50">
                        <div class="col-md-6">
                            <div class="form-inner">
                                <label>Full Name</label>
                                <input id="enquiry_name" type="text" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner">
                                <label>Email Address</label>
                                <input id="enquiry_email" type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner">
                                <label>Number of People*</label>
                                <input id="enquiry_people" type="text" placeholder="Number of people">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner">
                                <label>Travel Date</label>
                                <div class="date-field-area">
                                    <input id="enquiry_travel_date" type="text" name="inOut" readonly="" value="Sep 12 - Sep 20">
                                    <svg class="calender-icon" width="14" height="14" viewBox="0 0 14 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M12.1953 1.09375H10.9375V0.4375C10.9375 0.195891 10.7416 0 10.5 0C10.2584 0 10.0625 0.195891 10.0625 0.4375V1.09375H3.9375V0.4375C3.9375 0.195891 3.74164 0 3.5 0C3.25836 0 3.0625 0.195891 3.0625 0.4375V1.09375H1.80469C0.809566 1.09375 0 1.90332 0 2.89844V12.1953C0 13.1904 0.809566 14 1.80469 14H12.1953C13.1904 14 14 13.1904 14 12.1953V2.89844C14 1.90332 13.1904 1.09375 12.1953 1.09375ZM13.125 12.1953C13.125 12.7088 12.7088 13.125 12.1953 13.125H1.80469C1.29123 13.125 0.875 12.7088 0.875 12.1953V4.94922C0.875 4.91296 0.889404 4.87818 0.915044 4.85254C0.940684 4.8269 0.975459 4.8125 1.01172 4.8125H12.9883C13.0245 4.8125 13.0593 4.8269 13.085 4.85254C13.1106 4.87818 13.125 4.91296 13.125 4.94922V12.1953Z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-inner">
                                <label>Tour Details</label>
                                <textarea id="enquiry_details" placeholder="Write about tour info"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="enquiry_save_info">
                                    <label class="form-check-label" for="enquiry_save_info">
                                        Save my email address & name when I comment further time.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-inner">
                        <button id="enquiry-submit" type="submit" class="primary-btn1 black-bg">
                            <span>
                                Send Enquiry
                                <?php echo $top_right_arrow; ?>
                            </span>
                            <span>
                                Send Enquiry
                                <?php echo $top_right_arrow; ?>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enquiry Modal section End-->