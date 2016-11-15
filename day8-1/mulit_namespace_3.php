<?php

//首次使用namepsace不能省略

namespace people {

    class work {
        
        public function subwork() {
            $farmer = new farmer\work();
            $farmer->banner();
        }
        
        public function banner() {
            print "People";
        }
        
    }
    
    $work = new work();
    $work->subwork();
   
}

namespace people\farmer {

    class work {

        public function banner() {
            print "farmer";
        }

    }

} 