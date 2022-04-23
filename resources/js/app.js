require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import { SplitText } from "gsap/SplitText.js";
import { TextPlugin } from "gsap/TextPlugin.js";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);
gsap.registerPlugin(TextPlugin);


function ground() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "Breaking Ground", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function inspired() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "Inspired", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function happy() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "happy", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function leaders() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "leaders", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function family() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "family", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function loved() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "loved", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function valued() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "valued", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function more() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "more", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function artistic() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "artistic", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function intelligent() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "intelligent", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function confident() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "confident", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function future() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "the future", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function animate(){
    var master = gsap.timeline({onComplete: animate});
    master.add(ground())
        .add(inspired())
        .add(happy())
        .add(leaders())
        .add(family())
        .add(loved())
        .add(valued())
        .add(more())
        .add(artistic())
        .add(intelligent())
        .add(confident())
        .add(future())
}

window.addEventListener('load', function(){
    animate();
})
