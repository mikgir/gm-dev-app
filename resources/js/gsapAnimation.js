export const startAnimation = tl => {
    // header animation
    tl.from('.logo', 0.5, {
        x: -200,
        opacity: 0,
        rotateY: 360
    }, 1)
        .from('.socialLinks', 0.5, {
            x: 200,
            opacity: 0,
            rotateY: -360
        }, 1)
        .from('.link1', 0.5, {
            y: -100,
            opacity: 0,
        }, .5)
        .from('.link2', 0.5, {
            y: -100,
            opacity: 0,
        }, .7)
        .from('.link3', 0.5, {
            y: -100,
            opacity: 0,
        }, .8)
        .from('.link4', 0.5, {
            y: -100,
            opacity: 0,
        }, .9)
        .from('.link5', 0.5, {
            y: -100,
            opacity: 0,
        }, 1)
    // hero animation

    tl.from('.heroImg', 0.5, {
        scale: 0,
        opacity: 0
    }, 1.2)
        .from('.braceLeft', 0.5, {
            x: -300,
            y: -200,
            opacity: 0,
        }, 2.7)
        .from('.braceRight', 0.5, {
            x: 200,
            y: 300,
            opacity: 0,
        }, 3.3)
        .from('.backList1', 0.5, {
            x: 200,
            opacity: 0,
        }, 3.9)
        .from('.backList2', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.5)
        .from('.backList3', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.9)
        .from('.backList4', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.2)
        .from('.backList5', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.3)
        .from('.frontList1', 0.5, {
            x: -300,
            opacity: 0,
        }, 4.4)
        .from('.frontList2', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.5)
        .from('.frontList3', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.6)
        .from('.frontList4', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.7)
        .from('.frontList5', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.8)
        .from('.frontList6', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 4.9)
        .from('.frontListTwo1', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 5)
        .from('.frontListTwo2', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 5.1)
        .from('.backListArt', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 5.2)
        .from('.blueTitle', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 5.3)
        .from('.orangeTitle', 0.5, {
            x: -200,
            y: -200,
            opacity: 0,
        }, 5.4)
        .from('.frontListDoth', 0.5, {
            x: -200,
            opacity: 0,
        }, 5.5)
        .from('.backListDoth', 0.5, {
            x: -200,
            opacity: 0,
        }, 5.5)
        .to('.subText', {
            duration: 1.5,
            text: 'My name is',
            ease: "none"
        }, 5.6)
        .from('.itemTitle', 0.5, {
            scale: 0,
            opacity: 0,
        }, 7.9)
        .to('.underText', {
            duration: 2,
            text: 'I recently graduated from the Faculty of Full Stack\n' +
                '                            Web Development.',
            ease: "none"
        }, 9.7)
        .from('.heroText', 1, {
            x: -200,
            opacity: 0
        }, 14)
};

// text animation

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

// text content

export const textOne = {
    text: [
        `<span style="color: #D19A66">#Me</span><span class="wight"> {</span>\n`,
        `<span class="wight">first-name: </span><span style="color: #D19A66">Mikhail;</span>\n`,
        `<span class="wight">second-name: </span><span style="color: #D19A66">Groshev;</span>\n`,
        `<span class="wight">birth-date: </span><span style="color: #61AFEF">#28.12.1968;</span>\n`,
        `<span class="wight">}</span>\n`,
        `<span style="color: #D19A66">.education </span><span class="wight"> {</span>\n`,
        `<span class="wight">higher: </span><span style="color: #D19A66">MEI;</span>\n`,
        `<span class="wight">second: </span><span style="color: #D19A66">Faculty of web Development;</span>\n`,
        `<span class="wight">}</span>\n`,
        `<span style="color: #D19A66">.previous-employment </span><span class="wight"> {</span>\n`,
        `<span class="wight">own business: </span><span style="color: #D19A66">electric construction;</span>\n`,
        `<span class="wight">present time: </span><span style="color: #D19A66">freelance;</span>\n`,
        `<span class="wight">}</span>\n`,
        `<span style="color: #D19A66">.hobbies </span><span class="wight"> {</span>\n`,
        `<span class="wight">photography: </span><span style="color: #D19A66">landscape, portrait;</span>\n`,
        `<span class="wight">music: </span><span style="color: #D19A66">classical, rock;</span>\n`,
        `<span class="wight">}</span>\n`,
    ],
    htmlOut: document.querySelector('.firstText')
};

export const textTwo = {
    text: [
        `<span style="color: #D55FDE" class="violet">const </span><span class="verWight">I </span><span class="wight">= </span><span style="color: #EF596F">document</span><span>.</span><span style="color: #61AFEF">getElementById</span><span>(</span><span style="color: #89CA78">'Me'</span><span class="wight">)</span>\n`,
        `<span style="color: #D55FDE" class="violet">const </span><span class="verWight">you </span><span class="wight">= </span><span style="color: #D55FDE">new </span><span style="color: #61AFEF" class="blue">WelcomeGuest</span><span>(</span><span style="color: #FF6E30"> name </span><span>)</span>\n`,
        `<span style="color: #D55FDE" class="violet">function </span><span style="color: #61AFEF" class="blue">contactMe </span><span class="wight">( </span><span style="color: #FF6E30">study, working</span><span> )</span><span> {</span>\n`,
        `    <span style="color: #D55FDE" class="violet">let </span><span class="verWight">myStudy <span class="wight">= () => {</span></span>\n`,
        `    <span style="color: #61AFEF" class="blue">studyWebDevelopment</span><span class="wight">}</span>\n`,
        `    <span style="color: #D55FDE" class="violet">let </span><span class="verWight">myWork <span class="wight">= () => {</span></span>\n`,
        `    <span class="verWight">I.</span><span style="color: #61AFEF" class="blue">create</span><span class="wight">(</span><span style="color: #89CA78" class="green">'InteractiveApplications'</span><span class="wight">)</span>\n`,
        `    <span style="color: #D55FDE" class="violet">if </span><span class="wight">( </span><span style="color: #EF596F">myWork <span style="color: #ffffff">>=</span> myStudy <span style="color: #ffffff">||</span>\n`,
        `         myWork <span class="wight"><span style="color: #ffffff">===</span></span> you.interest</span><span class="wight"> ) { </span>\n`,
        `         <span style="color: #61AFEF" class="blue"><span style="color: #EF596F">you</span>.contactMe;</span>\n`,
        `    <span class="wight">}</span>\n`,
        `  <span class="wight">}</span>\n`,
        `<span class="wight">}</span>\n`,
        `<span class="wight">/* I combine my web development skills\n`,
        `* with my previous experience running my</span>\n`,
        `<span class="wight">* own business.</span>\n`,
        `<span class="wight">* I am open for cooperation and if you</span>\n`,
        `<span>* are interested, please contact me. */</span>`
    ],
    htmlOut: document.querySelector('.secondText')
};
// type text

export const typeText = (text, htmlOut) => {
    let line = 0;
    let count = 0;
    let txtOut = '';

    function typeLine() {
        let interval = setTimeout(() => {
            txtOut += text[line][count];
            htmlOut.innerHTML = `<pre>${txtOut + '|'}</pre>`;
            count++;
            if (count >= text[line].length) {
                count = 0;
                line++;
                if (line === text.length) {
                    clearTimeout(interval);
                    htmlOut.innerHTML = `<pre>${txtOut}</pre>`;
                    return true;
                }
            }
            typeLine();
        }, getRandomInt(getRandomInt(50)));
    }

    typeLine();
}

export const aboutAnimation = tlScrolling1 => {
    tlScrolling1
        .from('.aboutHeading', 2, {
            opacity: 0,
            y: 100,
            rotationX: 360,
            ease: 'elastic'
        }, .5)
        .from('.content', 2, {
            opacity: 0,
            x: 300,
        }, 1.2)
        .from('.firstText', 1, {
            opacity: 0,
            onComplete: typeText()
        }, 2)
        .call(typeText, [textOne.text, textOne.htmlOut])
        .from('.secondText', 1, {
            opacity: 0,
            onComplete: typeText()
        }, 20)
        .call(typeText, [textTwo.text, textTwo.htmlOut])
}

export const skillsAnimation = tlScrolling2 => {
    tlScrolling2
        .from('.skillsHeading', 2, {
            opacity: 0,
            y: 100,
            rotationX: 360,
            ease: 'elastic'
        })
        .from('.skillsItems', 1,  {
            x: -200,
            opacity: 0,
            ease: 'power3',
        })
        .from('.git', 0.7,  {
            opacity: 0,
            x: 300,
            rotation: 360,
            ease: 'elastic',
        })
        .from('.linux', 0.7,  {
            opacity: 0,
            x: 300,
            rotation: 360,
            ease: 'elastic',
        })
        .from('.php', 0.7,  {
            opacity: 0,
            x: 300,
            rotation: 360,
            ease: 'elastic',
        })
        .from('.html5', 0.7,  {
            opacity: 0,
            x: -300,
            rotation: -360,
            ease: 'elastic',
        })
        .from('.css3', 0.7,  {
            opacity: 0,
            x: -300,
            rotation: -360,
            ease: 'elastic',
        })
        .from('.js', 0.7,  {
            opacity: 0,
            x: -300,
            rotation: -360,
            ease: 'elastic',
        })
        .from('.vuejs', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.react', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.symfony', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.node', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.docker', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.gulp', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.github', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.laravel', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.bootstrap', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
        .from('.sass', 0.3,  {
            scale: 0,
            ease: 'elastic',
        })
}
export const worksAnimation = tlScrolling3 => {
    tlScrolling3
        .from('.worksHeading', 2, {
            opacity: 0,
            y: 100,
            rotationX: 360,
            ease: 'elastic'
        })
        .from('.works_box', 2,  {
            x: 200,
            opacity: 0,
            ease: 'power3',
        }, 1)
        .from('.mockup__img', 2, {
            opacity: 0,
            rotateY: 45
        }, 2.5)
        .from('.link__image', 2, {
            opacity: 0
        }, 4)
}
export const experienceAnimation = tlScrolling4 => {
    tlScrolling4
        .from('.experience1', .5, {
            x: 500,
            opacity: 0,
            ease: 'none'
        }, .2)
        .from('.experience2', .5,  {
            x: 500,
            opacity: 0,
            ease: 'none',
        }, .9)
        .from('.experience3', .5,  {
            x: 500,
            opacity: 0,
            ease: 'none',
        }, 1)
}
export const contactsAnimation = tlScrolling5 => {
    tlScrolling5
        .from('.contactHeading', 2, {
            opacity: 0,
            y: 100,
            rotationX: 360,
            ease: 'elastic'
        })
        .from('.contact__box', 1,  {
            x: -200,
            opacity: 0,
            ease: 'power3',
        })
}
