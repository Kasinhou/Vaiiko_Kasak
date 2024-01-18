document.addEventListener('DOMContentLoaded', function () {
    let bgImageContainer = document.getElementById('bgImageContainer');

    for (let i = 0; i < 9; i++) {
        let divElement = document.createElement('div');
        divElement.className = 'bg-image';
        let imgElement = document.createElement('img');


        //imgElement.src = "{{ asset('images/bg') }}" + (i % 4 + 1) + ".jpg";
        imgElement.src = "../images/bg" + (i % 4 + 1) + ".jpg";

        // Append child
        divElement.appendChild(imgElement);
        bgImageContainer.appendChild(divElement);
    }
});
