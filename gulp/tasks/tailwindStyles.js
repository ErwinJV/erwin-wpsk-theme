
const run = require('gulp-run')

function tailwindStyles(){
   
   return run('yarn tailwind:run').exec()

}


exports.tailwindStyles  = tailwindStyles