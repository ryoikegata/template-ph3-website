'use strict'

//クイズ正解不正解表示
const choiceButtons = document.querySelectorAll('.choiceBtn');

choiceButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
        const dataCorrect = btn.getAttribute('data-correct');
        if (dataCorrect === '1') {
            alert('正解');
        } else{
            alert('不正解');
        }
    });
});

// modal
let deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        let modalId = button.getAttribute('data-modal');
        let deleteModal = document.getElementById(modalId);
        let cancelDelete = document.getElementById('cancelDelete' + modalId);

        // 削除ボタンがクリックされたらモーダルを表示
        deleteModal.style.display = 'block';

        // キャンセルボタンがクリックされたらモーダルを非表示
        cancelDelete.addEventListener('click', function() {
            deleteModal.style.display = 'none';
        });
    });
});