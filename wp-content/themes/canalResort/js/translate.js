$(document).ready(() =>  {
    const selected = document.getElementsByClassName('gt-selected')[0];
    const options = document.getElementsByClassName('gt_options')[0];
    const parent = document.getElementsByClassName('gt_float_switcher')[0];
    parent.insertBefore(selected, options);

    

    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
        if (mutation.attributeName === 'class') {
            if(options.classList.contains('gt-open')) {
                parent.classList.add('open');
                document.body.style.overflow = 'hidden';
            } else {
                parent.classList.remove('open');
                document.body.style.overflowY = 'auto';
            }
        }
    });
    });
    
    const config = { attributes: true };
    
    observer.observe(options, config);
})

