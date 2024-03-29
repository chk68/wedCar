<script>
    document.addEventListener("DOMContentLoaded", function() {
        const decorationBlocks = document.querySelectorAll('.decoration-block');

        decorationBlocks.forEach(function(block) {
            block.addEventListener('click', function() {
                const radio = block.querySelector('input[type="radio"]');
                radio.click();

                decorationBlocks.forEach(function(element) {
                    element.classList.remove('selected');
                });

                block.classList.add('selected');

                calculateTotalPrice();
            });
        });

        calculateTotalPrice();
    });

    function calculateTotalPrice() {
        const selectedDecoration = document.querySelector('.decoration-block.selected');
        const decorationPrice = selectedDecoration ? parseFloat(selectedDecoration.querySelector('input[name="decoration"]').value) : 0;

        const startTime = document.querySelector('#start_time').value;
        const endTime = document.querySelector('#end_time').value;

        const startParts = startTime.split(':');
        const endParts = endTime.split(':');
        const startHour = parseInt(startParts[0]);
        const startMinute = parseInt(startParts[1]);
        const endHour = parseInt(endParts[0]);
        const endMinute = parseInt(endParts[1]);

        let hours = endHour - startHour;
        let minutes = endMinute - startMinute;

        if (minutes < 0) {
            hours--;
            minutes += 60;
        }

        const hourPrice = 300;
        let totalPrice = (hours + minutes / 60) * hourPrice;
        totalPrice += decorationPrice;

        document.getElementById('total-price').textContent = totalPrice;
    }
</script>
