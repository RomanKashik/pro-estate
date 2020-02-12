$(function () {
    //magnific-popup
    $('.popup_about_link').magnificPopup({
        type: 'inline',
    })
    $(document).on('click', '.popup_about-dismiss', function (e) {
        e.preventDefault()
        $.magnificPopup.close()
    })

    //pagetoscroll
    $(window).on('load', function () {
        $('a,a[href=\'#top\'],a[rel=\'m_PageScroll2id\'],a.PageScroll2id').mPageScroll2id({
            highlightSelector: 'a',
        })
    })





    let files = [];


    button.addEventListener('click', function () {
        loader.click()
    })

    loader.addEventListener('change', function () {
        for (let i = 0; i < loader.files.length; i++) {
            let file = loader.files[i]
            let item = document.createElement('div')
            item.classList.add('order__form-close-file')

            files.push(file)
            list.appendChild(item)

            item.textContent = file.name
            item.addEventListener('click', function () {
                // files = files.filter(f => f.name !== file.name)
                files = files.filter(function(f){return f.name !== file.name})

                item.remove()
            })
        }

        loader.value = ''

    });

});


