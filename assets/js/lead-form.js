(function () {
    const whatsappNumber = window.APP_CONFIG?.whatsapp_number;
    if (!whatsappNumber) return;

    function clearErrors(scope) {
        if (!scope) return;
        scope.querySelectorAll('.error').forEach((el) => el.classList.remove('error'));
        scope.querySelectorAll('.error-message').forEach((el) => el.remove());
    }

    function showError(field, message) {
        if (!field) return;
        field.classList.add('error');
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.textContent = message;
        field.parentNode?.appendChild(errorMsg);
    }

    function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value || '');
    }

    function openWhatsApp(message) {
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }

    function formatDateForMessage(dateValue) {
        if (!dateValue) return '';
        const m = dateValue.match(/^(\d{4})-(\d{2})-(\d{2})$/);
        if (m) return `${m[2]}/${m[3]}/${m[1]}`;
        return dateValue;
    }

    function initLeadBookingForm() {
        const form = document.getElementById('booking-form');
        const bookingButton = document.getElementById('booking-button');
        if (!form || !bookingButton) return;

        function validateLeadForm() {
            const requiredFields = [
                'name',
                'phone',
                'pickup_location',
                'dropoff_location',
                'passengers',
                'pickup_date',
                'choose_model'
            ];

            let isValid = true;
            clearErrors(form);

            requiredFields.forEach((fieldId) => {
                const field = document.getElementById(fieldId);
                if (!field || !field.value.trim()) {
                    showError(field, 'This field is required');
                    isValid = false;
                }
            });

            const phoneField = document.getElementById('phone');
            if (phoneField) {
                const phone = phoneField.value.replace(/[^0-9]/g, '');
                if (phone.length < 7) {
                    showError(phoneField, 'Enter a valid phone number');
                    isValid = false;
                }
            }

            return isValid;
        }

        function formatBookingMessage(name, phone, pickup, dropoff, passengers, pickupDate, model) {
            let msg = '*NEW RIDE BOOKING REQUEST*\n';
            msg += '================================\n\n';
            msg += `*Name:* ${name}\n`;
            msg += `*Phone:* ${phone}\n\n`;
            msg += `*Pickup:* ${pickup}\n`;
            msg += `*Dropoff:* ${dropoff}\n\n`;
            msg += `*Passengers:* ${passengers}\n`;
            msg += `*Pickup Date:* ${pickupDate}\n`;
            msg += `*Cab Model:* ${model}\n\n`;
            msg += 'Please confirm availability.';
            return msg;
        }

        bookingButton.addEventListener('click', function () {
            if (!validateLeadForm()) return;

            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const pickup = document.getElementById('pickup_location').value.trim();
            const dropoff = document.getElementById('dropoff_location').value.trim();
            const passengers = document.getElementById('passengers').value.trim();
            const rawPickupDate = document.getElementById('pickup_date').value.trim();
            const pickupDate = formatDateForMessage(rawPickupDate);
            const model = document.getElementById('choose_model').value.trim();

            const whatsappMessage = formatBookingMessage(name, phone, pickup, dropoff, passengers, pickupDate, model);
            openWhatsApp(whatsappMessage);
        });
    }

    function initEnquiryModalForm() {
        const form = document.getElementById('enquiry-form');
        if (!form) return;

        const fields = {
            name: document.getElementById('enquiry_name'),
            email: document.getElementById('enquiry_email'),
            people: document.getElementById('enquiry_people'),
            travelDate: document.getElementById('enquiry_travel_date'),
            details: document.getElementById('enquiry_details'),
            saveInfo: document.getElementById('enquiry_save_info')
        };

        function validateEnquiryForm() {
            clearErrors(form);
            let isValid = true;

            if (!fields.name?.value.trim()) {
                showError(fields.name, 'This field is required');
                isValid = false;
            }

            const emailValue = fields.email?.value.trim() || '';
            if (!emailValue) {
                showError(fields.email, 'This field is required');
                isValid = false;
            } else if (!isValidEmail(emailValue)) {
                showError(fields.email, 'Enter a valid email address');
                isValid = false;
            }

            const peopleValue = fields.people?.value.trim() || '';
            if (!peopleValue) {
                showError(fields.people, 'This field is required');
                isValid = false;
            } else if (!/^\d+$/.test(peopleValue)) {
                showError(fields.people, 'Enter a valid number');
                isValid = false;
            }

            if (!fields.travelDate?.value.trim()) {
                showError(fields.travelDate, 'This field is required');
                isValid = false;
            }

            if (!fields.details?.value.trim()) {
                showError(fields.details, 'This field is required');
                isValid = false;
            }

            return isValid;
        }

        function formatEnquiryMessage(data) {
            let msg = '*NEW TOUR ENQUIRY – TURBO HILLS*\n';
            msg += '================================\n\n';
            msg += `*Full Name:* ${data.name}\n`;
            msg += `*Email:* ${data.email}\n`;
            msg += `*Number of People:* ${data.people}\n`;
            msg += `*Travel Date:* ${data.travelDate}\n`;
            msg += `*Save Info Consent:* ${data.saveInfo ? 'Yes' : 'No'}\n\n`;
            msg += '*Tour Details:*\n';
            msg += `${data.details}\n\n`;
            msg += 'Please connect with me for package details.';
            return msg;
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!validateEnquiryForm()) return;

            const data = {
                name: fields.name.value.trim(),
                email: fields.email.value.trim(),
                people: fields.people.value.trim(),
                travelDate: fields.travelDate.value.trim(),
                details: fields.details.value.trim(),
                saveInfo: !!fields.saveInfo?.checked
            };

            openWhatsApp(formatEnquiryMessage(data));
        });
    }

    initLeadBookingForm();
    initEnquiryModalForm();
})();