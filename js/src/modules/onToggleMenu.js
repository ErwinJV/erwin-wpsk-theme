const onToggleMenu = (targetClass,selector)=>{
    
  let target = document.querySelector(selector)
   
  console.log(target)
  
  target.classList.toggle(targetClass)
  console.log(target.classList)
    
}