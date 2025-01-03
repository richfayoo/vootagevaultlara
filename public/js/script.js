document.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navba');
    if (window.scrollY > 50) {
      navbar.classList.remove('navba-transparent');
      navbar.classList.add('navba-solid');
    } else {
      navbar.classList.remove('navba-solid');
      navbar.classList.add('navba-transparent');
    }
  });

  document.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navba');
    if (window.scrollY > 50) {
      navbar.classList.remove('navba-transparent a');
      navbar.classList.add('navba-solid a');
    } else {
      navbar.classList.remove('navba-solid a');
      navbar.classList.add('navba-transparent a');
    }
  });

  console.clear();

  const loginBtn = document.getElementById('login');
  const signupBtn = document.getElementById('signup');
  
  loginBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode.parentNode;
    Array.from(e.target.parentNode.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        signupBtn.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  
  signupBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode;
    Array.from(e.target.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        loginBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  
    