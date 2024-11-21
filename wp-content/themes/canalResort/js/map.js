$(document).ready(() =>  {
    const maps = Array.from(document.getElementsByClassName('map__each--colored'));
    console.log('maps' + maps)

    const navs = Array.from(document.getElementsByClassName('map__nav--link'));
    console.log('navs' + navs)

    const defaultMap =  document.getElementById('map-default')

    const showMaps = (i) => {
        maps[i].classList.add('show');
        // defaultMap.classList.add('hide');
    }
    const hideMaps = (i) => {
        maps[i].classList.remove('show');
        // defaultMap.classList.remove('hide');
    }

    for(let i = 0; i < navs.length; i ++ ){
        
        navs[i].addEventListener('mouseenter', () => {
            showMaps(i)
        });
        navs[i].addEventListener('mouseleave', () => {
            hideMaps(i)
        });
    }
    
})

