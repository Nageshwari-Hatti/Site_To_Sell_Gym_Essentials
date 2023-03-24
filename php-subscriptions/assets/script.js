var subscriptionForm = $('#subscription-form')

subscriptionForm.submit(function(e){
    e.preventDefault()
    subscriptionForm.find('.form-msg').remove();
    var msg = $('<div>')
        msg.addClass('alert alert-info rounded-0 py-2 form-msg')
        msg.hide()
        msg.text('Please wait...')
        subscriptionForm.prepend(msg)
        msg.show('SlideDown')
        subscriptionForm.addClass('disabled')

        $.ajax({
            url:"./api.php?action=save_subscriber",
            method:'POST',
            data: subscriptionForm.serialize(),
            dataType:'json',
            error: err=>{
                msg.addClass('alert-danger')
                msg.text("Failed to process the subscription due to unknown reason.")
                msg.show('SlideDown')
                subscriptionForm.removeClass('disabled')
                console.error(err)
            },
            success:function(resp){
                msg.hide('')
                msg.removeClass('alert-info')
                if(resp.status == 'success'){
                    msg.addClass('alert-success')
                    subscriptionForm[0].reset()
                }else if(resp.status == 'warning'){
                    msg.addClass('alert-warning')
                }else{
                    msg.addClass('alert-danger')
                }
                if(!!resp.msg){
                    msg.text(resp.msg)
                }else{
                    msg.text("Failed to process the subscription due to unknown reason.")
                }
                msg.show('SlideDown')
                subscriptionForm.removeClass('disabled')
            }
        })
})