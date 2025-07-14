

const deleteBorderFromAllAvatar = () => {
    const avatars = document.querySelectorAll('.js-avatar');
    avatars.forEach(el => {
        el.style.border = "none"
    })
}
const checkForm = () => {
    const inputs = document.querySelectorAll('.create-customer-div input');
    inputs.forEach(el => {
        el.addEventListener('keyup', e => {
            if (el.value.length === 0) {
                el.nextElementSibling.style.display = "block"
            } else {
                el.nextElementSibling.style.display = "none"
            }
        })

    })
}

const submitForm = () => {
    const form = document.querySelector('#create-customer-form');
    const inputs = document.querySelectorAll('.create-customer-div input:not([type="hidden"])');
    for (let input of inputs) {
        if (input.value.length === 0) {
            input.nextElementSibling.style.display = "block"
            return
        } else {
            input.nextElementSibling.style.display = "none"
        }
    }
    form.submit()

}
(() => {
    const avatars = document.querySelectorAll('.js-avatar');
    avatars.forEach(el => {
        el.style.border = "none"
        el.addEventListener('click', e => {
            deleteBorderFromAllAvatar();
            const avatarInput = document.querySelector('input[name="avatar"]');
            const selectedAvatar = e.target;
            avatarInput.value = selectedAvatar.dataset.avatar;
            selectedAvatar.style.border = "2px solid #1453E2"
        })
    })
    checkForm()
    window.submitForm = submitForm
})()