(function () {

    const whatsappNumber = window.APP_CONFIG.whatsapp_number;

    const submitBtn = document.getElementById('contact-submit');
    if (!submitBtn) return;

    function validateContactForm() {
        const requiredFields = ['c_name', 'c_phone', 'c_message'];
        let isValid = true;

        document.querySelectorAll('.error-message').forEach(e => e.remove());
        document.querySelectorAll('.error').forEach(e => e.classList.remove('error'));

        requiredFields.forEach(id => {
            const field = document.getElementById(id);
            if (!field || !field.value.trim()) {
                field.classList.add('error');

                const error = document.createElement('div');
                error.className = 'error-message';
                error.innerText = 'This field is required';
                field.parentNode.appendChild(error);

                isValid = false;
            }
        });

        // phone validation
        const phone = document.getElementById('c_phone').value.replace(/[^0-9]/g, '');
        if (phone.length < 7) {
            const phoneField = document.getElementById('c_phone');
            phoneField.classList.add('error');

            const error = document.createElement('div');
            error.className = 'error-message';
            error.innerText = 'Enter a valid phone number';
            phoneField.parentNode.appendChild(error);

            isValid = false;
        }

        return isValid;
    }

    function formatContactMessage(data) {
        let msg = '*NEW CONTACT ENQUIRY – TURBO HILLS*\n';
        msg += '================================\n\n';
        msg += `*Name:* ${data.name}\n`;
        msg += `*Phone:* ${data.phone}\n`;

        if (data.email) msg += `*Email:* ${data.email}\n`;
        if (data.subject) msg += `*Subject:* ${data.subject}\n`;

        msg += `\n*Message:*\n${data.message}\n\n`;
        msg += 'Please respond as soon as possible.';

        return msg;
    }

    submitBtn.addEventListener('click', function () {

        if (!validateContactForm()) return;

        const data = {
            name: document.getElementById('c_name').value.trim(),
            phone: document.getElementById('c_phone').value.trim(),
            email: document.getElementById('c_email')?.value.trim(),
            subject: document.getElementById('c_subject')?.value.trim(),
            message: document.getElementById('c_message').value.trim()
        };

        const whatsappMessage = formatContactMessage(data);
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        console.log('WhatsApp URL:', whatsappURL);

        window.open(whatsappURL, '_blank');
    });

})();