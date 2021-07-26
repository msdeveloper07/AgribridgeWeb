<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

    const userData = JSON.parse(localStorage.getItem('userData'))
    let Image = (serverPath + (userData.user_data.user_image_url ? userData.user_data.user_image_url : defaultAvatar))
    document.querySelector('.main_user_image').setAttribute("src", Image)
    document.querySelector('.user_name_header').innerHTML = userData.user_data.user_name
</script>