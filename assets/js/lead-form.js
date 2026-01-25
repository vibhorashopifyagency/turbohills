(function () {
    const form = document.getElementById('booking-form');
    if (!form) return;

    const whatsappNumber = window.APP_CONFIG.whatsapp_number; // change to your WhatsApp number (country code, no +)

    function validateForm() {
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

        // Clear old errors
        document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
        document.querySelectorAll('.error-message').forEach(el => el.remove());

        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (!field || !field.value.trim()) {
                if (field) field.classList.add('error');

                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'This field is required';
                if (field && field.parentNode) field.parentNode.appendChild(errorMsg);

                isValid = false;
            }
        });

        // Validate phone length (basic)
        const phoneField = document.getElementById('phone');
        if (phoneField) {
            const phone = phoneField.value.replace(/[^0-9]/g, '');
            if (phone.length < 7) {
                phoneField.classList.add('error');
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Enter a valid phone number';
                phoneField.parentNode.appendChild(errorMsg);
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

    // Convert HTML date input (YYYY-MM-DD) to MM/DD/YYYY for message readability
    function formatDateForMessage(dateValue) {
        if (!dateValue) return '';
        // If already in YYYY-MM-DD format, convert
        const m = dateValue.match(/^(\d{4})-(\d{2})-(\d{2})$/);
        if (m) {
            return `${m[2]}/${m[3]}/${m[1]}`;
        }
        return dateValue;
    }

    const bookingButton = document.getElementById('booking-button');
    bookingButton.addEventListener('click', function (e) {
        // Remove any previous errors
        document.querySelectorAll('.error-message').forEach(el => el.remove());

        if (!validateForm()) return;

        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const pickup = document.getElementById('pickup_location').value.trim();
        const dropoff = document.getElementById('dropoff_location').value.trim();
        const passengers = document.getElementById('passengers').value.trim();
        const rawPickupDate = document.getElementById('pickup_date').value.trim();
        const pickupDate = formatDateForMessage(rawPickupDate);
        const model = document.getElementById('choose_model').value.trim();

        const whatsappMessage = formatBookingMessage(name, phone, pickup, dropoff, passengers, pickupDate, model);

        // Open WhatsApp in a new tab (AJAX-style: no navigation/submission)
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
        
        console.log('WhatsApp URL:', whatsappUrl);
        window.open(whatsappUrl, '_blank');
    });

    // Real-time validation feedback
    document.querySelectorAll('#booking-form input, #booking-form select').forEach(field => {
        field.addEventListener('blur', function () {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.classList.add('error');
            } else {
                this.classList.remove('error');
                const errorMsg = this.parentNode.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        });

        field.addEventListener('input', function () {
            if (this.classList.contains('error') && this.value.trim()) {
                this.classList.remove('error');
                const errorMsg = this.parentNode.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        });
    });

})();