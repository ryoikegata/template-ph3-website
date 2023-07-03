'use strict'

// modal
let deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        let modalId = button.getAttribute('data-modal');
        let deleteModal = document.getElementById(modalId);
        let cancelDelete = document.querySelectorAll('#cancelDelete');

                // ボタンがクリックされたらbody要素の背景色をグレーに変更
                document.body.style.backgroundColor = 'gray';

        // 削除ボタンがクリックされたらモーダルを表示
        deleteModal.style.display = 'block';

        // キャンセルボタンがクリックされたらモーダルを非表示
        cancelDelete.forEach(cancel => {
          cancel.addEventListener('click', function() {
            document.body.style.backgroundColor = '';
              deleteModal.style.display = 'none';
          });
          
        });
    });
});