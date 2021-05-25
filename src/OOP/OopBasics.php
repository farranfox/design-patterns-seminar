<?php

namespace App\OOP;

//interface PostUpdater {
//    public function update(): void;
//}

abstract class PostUpdater {
    abstract public function update(): void;
}

final class InstagramPostUpdater extends PostUpdater {
    public function update(): void {
        echo 'Updating Instagram post...' . PHP_EOL;
    }
}

class OopBasics {
    private $postUpdater;
    public function __construct(PostUpdater $postUpdater) {
        $this->postUpdater = $postUpdater;
    }

    public function doSomething() {
        $this->postUpdater->update();
    }
}




