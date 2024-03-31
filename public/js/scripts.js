

const button_close = document.querySelector('.button_close');
const pop = document.querySelector('.pop');



button_close.addEventListener('click', close);
pop.addEventListener('click', close);
checkbox.addEventListener('click', all);


  function close(){
    const sidebar = document.querySelector('.sidebar')
    const bg_sidebar = document.querySelector('.bg-sidebar');
    // sidebar.classList.add('lg:block');
    bg_sidebar.classList.toggle('hidden');
    sidebar.classList.toggle('hidden');
  }

  

  


