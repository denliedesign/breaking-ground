function AddTextName(c) {
    document.getElementById('name').value += c;
};

function AddTextSection(c) {
    document.getElementById('section').value += c;
};

function AddPhotoName(c) {
    document.getElementById('photoName').value += c;
};

function AddPhotoSection(c) {
    document.getElementById('photoSection').value += c;
};

function AddTableName(c) {
    document.getElementById('tableName').value += c;
};

function AddTableSection(c) {
    document.getElementById('tableSection').value += c;
};

function AddComboName(c) {
    document.getElementById('comboName').value += c;
};

function AddComboSection(c) {
    document.getElementById('comboSection').value += c;
};

function AddHeadingName(c) {
    document.getElementById('headingName').value += c;
};

function AddHeadingSection(c) {
    document.getElementById('headingSection').value += c;
};


// function downToBottom() {
//     gsap.to(window, {duration: 5, ease: 'power2.inOut', scrollTo: '#bottom'});
// }

document.addEventListener('DOMContentLoaded', function () {
    // Function to strip p tags from a given element
    function stripParagraphTags(elementId) {
        var element = document.getElementById(elementId);
        if (element) {
            // Get the inner HTML and remove p tags
            var innerHTML = element.innerHTML;
            innerHTML = innerHTML.replace(/<\/?p[^>]*>/g, '');
            element.innerHTML = innerHTML;
        }
    }

    // Call the function for the specific element
    stripParagraphTags('without-p-tags');
});
