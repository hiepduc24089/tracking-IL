document.querySelectorAll('.question-item').forEach(item => {
    const arrowIcon = item.querySelector('.arrow-icon');
    const answer = item.querySelector('.question-answer');
    const questionItem = item.querySelector('#questionItem');

    questionItem.addEventListener('click', function() {
        document.querySelectorAll('.question-item').forEach(otherItem => {
            const otherAnswer = otherItem.querySelector('.question-answer');
            const otherIcon = otherItem.querySelector('.arrow-icon');

            if (otherItem !== item) {
                otherItem.classList.remove('open');
                otherAnswer.style.maxHeight = null;
                otherAnswer.style.opacity = 0;
                otherIcon.classList.remove('arrow-up');
            }
        });

        item.classList.toggle('open');

        if (item.classList.contains('open')) {
            answer.style.maxHeight = answer.scrollHeight + "px";
            answer.style.opacity = 1;
            arrowIcon.classList.add('arrow-up');
        } else {
            answer.style.maxHeight = null;
            answer.style.opacity = 0;
            arrowIcon.classList.remove('arrow-up');
        }
    });
});
