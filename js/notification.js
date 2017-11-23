var text='';


//console.log(data1);
function sendPushToMyself() {
	text= $('.container .wi').text().trim();
	var isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
	var isSafari = ('safari' in window && 'pushNotification' in window.safari);
	var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

	var isSubscribed = false;
	if (isSafari) {
		var permissionData = window.safari.pushNotification.permission(WEB_SITE_PUSH_ID);
		subscribeSafari(permissionData);
	}

	if (isChrome) {
		subscribeChrome(text);
	}

	if (isFirefox) {
		if (Notification.permission !== 'denied') {
			Notification.requestPermission(function (permission) {
				sendPush('Firefox');
			});
		}
	}
}

var subscribeSafari = function (permissionData) {
		sendPush('Safari');
};

function subscribeChrome(data1) {

	console.log("Try to subscribe for push notifications");
	Notification.requestPermission(function () {
		sendPush('Chrome',data1);
	});
}

function getRandomInt(min, max) {
	// including both borders
	return Math.floor(Math.random() * (max - min + 1)) + min;
}


function sendPush(browser,data1) {
	console.log(data1);
	var pushTexts = [
		[
			// chrome
			[data1],
			
		],
		[
			// safari
			['test'],
			/*['Power up your marketing campaigns with web push notifications!', 'http://docs.pushwoosh.com/docs/safari-website-notifications'],
			['Sign up for a free trial and integrate web push into your website in minutes!', 'https://go.pushwoosh.com/register/'],
			['Find out more about web push notifications in our guides!', 'http://docs.pushwoosh.com/docs/safari-website-notifications']*/
		],
		[
			['test'],
			// firefox
			/*['Sign up for a free trial and integrate web push into your website in minutes!', 'https://go.pushwoosh.com/register/'],
			['Find out more about web push notifications in our guides!', 'http://docs.pushwoosh.com/docs/firefox-web-push']*/
		]
	];
	var notificationIcon = 'Weather.png';
	var notificationTitle = 'Hi,at your current location it is';

	var randomText = pushTexts[0][getRandomInt(0, pushTexts[0].length - 1)];
	if (browser == 'Safari') {
		randomText = pushTexts[1][getRandomInt(0, pushTexts[1].length - 1)];
	}
	if (browser == 'Firefox') {
		notificationIcon = 'https://www.pushwoosh.com/wp-content/themes/pushwoosh/img/firefox.png';
		randomText = pushTexts[2][getRandomInt(0, pushTexts[2].length - 1)];
	}

	var notificationMessage = randomText[0];

	try {
		var notification = new Notification(notificationTitle, {
			icon: notificationIcon,
			body: notificationMessage
		});

		/*notification.onclick = function () {
			window.open(randomText[1]);
			notification.close();
		};*/

		// hide after 10 seconds
		setTimeout(notification.close.bind(notification), 5000);
	} catch (e) {
		navigator.serviceWorker.ready.then(function (registration) {
			registration.showNotification(notificationTitle, {
				icon: notificationIcon,
				body: notificationMessage
			});
		});
	}
}