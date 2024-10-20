const notify = require('gulp-notify')

const handleError = ()=>{
return (err)=>{
     if(typeof err === 'undefined'){
         let message = ''

         if(err.plugin === 'gulp-run'){
            message = err.relativePath + '\n' + err.line + ':' + err.column;
         }


         notify({
            title:'Gulp task failed -- see console',
            message,

         }).write(err)
     }
}
     
}

module.exports = {
     handleError
}