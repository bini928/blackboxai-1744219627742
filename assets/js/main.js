$(document).ready(function() {
    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
    
    // Handle form submissions with AJAX
    $('form').submit(function(e) {
        e.preventDefault();
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');
        const originalText = submitBtn.html();
        
        submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...');
        
        // Simulate AJAX call
        setTimeout(function() {
            submitBtn.html(originalText).prop('disabled', false);
            const modal = form.closest('.modal');
            if (modal.length) {
                bootstrap.Modal.getInstance(modal[0]).hide();
            }
            showAlert('success', 'Operation completed successfully!');
        }, 1500);
    });
    
    // Show alert function
    function showAlert(type, message) {
        const alert = $(`<div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>`);
        
        $('.container').prepend(alert);
        setTimeout(() => alert.alert('close'), 5000);
    }
    
    // Delete confirmation
    $('.btn-danger').click(function() {
        if (confirm('Are you sure you want to delete this record?')) {
            const row = $(this).closest('tr');
            row.fadeOut(300, function() {
                row.remove();
                showAlert('success', 'Record deleted successfully!');
            });
        }
    });
});
