function toggleHeartAnimation(button) {
    let isClickedAlready = button.classList.contains('heartBeat');

    //prida triedu ktoru treba
    if (!isClickedAlready) {
        button.classList.add('heartBeat');
        button.classList.remove('heartBeatBack');

    } else {
        button.classList.add('heartBeatBack');
        button.classList.remove('heartBeat');
    }
}
