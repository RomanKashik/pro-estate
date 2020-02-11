let files = []

button.addEventListener('click', event => {
    loader.click()
})

loader.addEventListener('change', event => {
    for (let i = 0; i < loader.files.length; i++) {
        let file = loader.files[i]
        let item = document.createElement('div')
        item.classList.add('order__form-close-file')

        files.push(file)
        list.appendChild(item)

        item.textContent = file.name
        item.addEventListener('click', event => {
            files = files.filter(f => f.name !== file.name)

            item.remove()
        })
    }

    loader.value = ''
})
