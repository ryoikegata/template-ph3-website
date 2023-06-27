'use strict'

//クイズ正解不正解表示
const choiceBtns = document.querySelectorAll('.choiceBtn');

choiceBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        const dataCorrect = btn.getAttribute('data-correct');
        if (dataCorrect === '1') {
            alert('正解');
        } else{
            alert('不正解');
        }
    });
});
