// Configuration for your site's metadata
const shareData = {
    title: document.title,
    text: "Check this out!",
    url: window.location.href
};

// Main handler function
let qrGenerated = false;
function removeLocaleFromUrl(url) {
    const parsedUrl = new URL(url);
    // Matches a 2-letter language code (e.g., /en/)
    // or language-region code (e.g., /en-US/ or /th-TH/) right after the origin
    parsedUrl.pathname = parsedUrl.pathname.replace(/^\/[a-z]{2}(?:-[a-zA-Z]{2})?(?=\/|$)/, '');
    return parsedUrl.href;
}
function handleShare(event) {
    // Find the closest button with the class 'btn-share'
    const button = event.target.closest('.btn-share');
    if (!button) return; // Exit if a share button wasn't clicked
    let shareUrl = removeLocaleFromUrl(shareData.url);
    // Determine the action based on the second class name
    const isClass = (cls) => button.classList.contains(cls);
    try {
        if (isClass('btn-share-facebook')) {
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`, '_blank', 'noopener,noreferrer');
        }
        else if (isClass('btn-share-twitter')) {
            window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(shareUrl)}&text=${encodeURIComponent(shareData.text)}`, '_blank', 'noopener,noreferrer');
        }
        else if (isClass('btn-share-threads')) {
            window.open(`https://www.threads.net/intent/post?text=${encodeURIComponent(shareData.text + ' ' + shareUrl)}`, '_blank', 'noopener,noreferrer');
        }
        else if (isClass('btn-share-bookmark')) {
            alert("Press " + (navigator.userAgent.indexOf('Mac') != -1 ? 'Cmd + D' : 'Ctrl + D') + " to bookmark this page.");
        }
        else if (isClass('btn-share-copy-link')) {
            navigator.clipboard.writeText(shareUrl)
                .then(() => {
                    button.textContent = "Copied!";
                    setTimeout(() => $('.btn-share-copy-link').html('<i class="bi bi-clipboard-check"></i> Copy'), 5000);
                })
                .catch(err => console.error('Failed to copy link: ', err));
        }
        else if (isClass('btn-share-qr')) {
            $('#qr-code').slideToggle();
            if (!qrGenerated) {
                generateQRCode(shareUrl);
                qrGenerated = true;
            }
        }
    } catch (error) {
        console.error("Sharing failed:", error);
    }
}
// Example QR Code placeholder function
function generateQRCode(url) {
    const canvas = document.getElementById('canvas');
    const myUrl = window.location.href;
    // Generate the QR code
    QRCode.toCanvas(canvas, myUrl, {
        width: 200,
        margin: 2,
        color: {
            dark: '#000000',  // Black dots
            light: '#FFFFFF' // White background
        }
    }, function (error) {
        if (error) console.error(error);
        console.log('QR code generated successfully!');
    });
}
const container = document.getElementById('share-container');
container.addEventListener('click', handleShare);