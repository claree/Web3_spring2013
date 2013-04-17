// Copyright (c) 2012 The Chromium Authors. All rights reserved.
// Use of this source code is governed by a BSD-style license that can be
// found in the LICENSE file.

// Event listner for clicks on links in a browser action popup.
// Open the link in a new tab of the current window.

//$url = "http://nytimes.com";

//$page = file_get_contents($url);






function onAnchorClick(event) {
  chrome.tabs.create({
    selected: true,
    url: event.srcElement.href
  });
  return false;
}

// Given an array of URLs, build a DOM list of those URLs in the
// browser action popup.
function buildPopupDom(divName, data) {
  var popupDiv = document.getElementById(divName);

  var ul = document.createElement('ul');
  popupDiv.appendChild(ul);

  for (var i = 0, ie = data.length; i < ie; ++i) {
    var a = document.createElement('a');
    a.href = data[i];
    a.appendChild(document.createTextNode(data[i]));
    a.addEventListener('click', onAnchorClick);

    var li = document.createElement('li');
    li.appendChild(a);
    ul.appendChild(li);
  }
}

// Search history to find up to ten links that a user has typed in,
// and show those links in a popup.
function buildTypedUrlList(divName) {
  // To look for history items visited in the last week,
  // subtract a week of microseconds from the current time.
  var microsecondsPerWeek = 1000 * 60 * 60 * 24 * 7;
  //var oneWeekAgo = (new Date).getTime() - microsecondsPerWeek;
  var oneWeekAgo = (new Date).getTime() - (microsecondsPerWeek*2);

  // Track the number of callbacks from chrome.history.getVisits()
  // that we expect to get.  When it reaches zero, we have all results.
  var numRequestsOutstanding = 0;

  chrome.history.search({
  ///SHOULDN"T LINK BE REPLACEABLE WITH ANOTHER TRANSITION??????
      'text': '',              // Return every history item....THIS IS ONLY RETRIEVING GOOGLE!!!!
      //'startTime': oneWeekAgo,  // that was accessed less than one week ago.
      //'maxResults' : 100
    },
    function(historyItems) {
    console.log(historyItems);
    //$.post("http://107.21.206.112/midterm/test.php", {test: 'stuff'});    
      // For each history item, get details on all visits.
      for (var i = 0; i < historyItems.length; ++i) {
      
        var hist_url = historyItems[i].url;
        var hist_time = historyItems[i].lastVisitTime;

    data = 'url=' + hist_url + '&' + 'time=' + hist_time;

		$.ajax({
			
			url:'http://localhost/midterm/send.php',
			//data: 'url='+ hist_url,
      data: data,
			type: 'GET',
			crossDomain: true,
			dataType: 'jsonp'
		
		});
        
        var  timeLastVisit = historyItems[i].lastVisitTime;
        var  title = historyItems[i].title;    
   		 var  Count = historyItems[i].visitCount;  //times navigated to the page
   		 var  typedCount = historyItems[i].typedCount;  //times navigated to the page by typing address
   		
   
   		 
        
        var processVisitsWithUrl = function(url) {
          // We need the url of the visited item to process the visit.
          // Use a closure to bind the  url into the callback's args.
          return function(visitItems) {
       
            processVisits(url, visitItems);
         // processVisits(timeLastVisit, visitItems);
        	//processVisits(title, visitItems);
         // processVisits("you visited this page" + Count + "times" + url, visitItems);
          //processVisits("you visited this page " + url + " this many " + Count + " times" , visitItems);
           //$(url).hide();
		//$page = file_get_contents($url);
          };
          

          
        };
        chrome.history.getVisits({url: hist_url}, processVisitsWithUrl(hist_url));
        numRequestsOutstanding++;
      }
     
      
      
      if (!numRequestsOutstanding) {
        onAllVisitsProcessed();
      }
    });





  // Maps URLs to a count of the number of times the user typed that URL into
  // the omnibox.
  var urlToCount = {};

  // Callback for chrome.history.getVisits().  Counts the number of
  // times a user visited a URL by typing the address.
  var processVisits = function(url, visitItems) {
    for (var i = 0, ie = visitItems.length; i < ie; ++i) {
      // Ignore items unless the user typed the URL.
      //if (visitItems[i].transition != 'typed') {
        //continue;
      //}

      if (!urlToCount[url]) {
        urlToCount[url] = 0;
      }

      urlToCount[url]++;
    }

    // If this is the final outstanding call to processVisits(),
    // then we have the final results.  Use them to build the list
    // of URLs to show in the popup.
    if (!--numRequestsOutstanding) {
      onAllVisitsProcessed();
    }
  };

  // This function is called when we have the final list of URls to display.
  var onAllVisitsProcessed = function() {
    // Get the top scorring urls.
    urlArray = [];
    for (var url in urlToCount) {
      urlArray.push(url);
  
    }
    
     for (var title in urlToCount) {
      urlArray.push(title);
    }

    // Sort the URLs by the number of times the user typed them.
    urlArray.sort(function(a, b) {
      return urlToCount[b] - urlToCount[a];
    });

    buildPopupDom(divName, urlArray.slice(0, 10));///IS THIS WHERE I CAN INCREASSE THE # OF FINDS?
  };
}

document.addEventListener('DOMContentLoaded', function () {
  buildTypedUrlList("typedUrl_div");
});