function toggleDialog(dialogId) {
    var dialog = document.getElementById(dialogId);
    dialog.style.display = (dialog.style.display === 'block') ? 'none' : 'block';
}

document.getElementById('add-hannah').addEventListener('click', function() {
    toggleDialog('dialog-hannah');
});

document.getElementById('close-dialog-hannah').addEventListener('click', function() {
    toggleDialog('dialog-hannah');
});

document.getElementById('add-illano').addEventListener('click', function() {
    toggleDialog('dialog-illano');
});

document.getElementById('close-dialog-illano').addEventListener('click', function() {
    toggleDialog('dialog-illano');
});

