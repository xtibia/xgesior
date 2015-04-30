// preload images
PlayButtonOver = new Image();
PlayButtonOver.src = JS_DIR_IMAGES + 'mmorpg/button_playnow_over.png';

function ShowHelperDiv(a_ID)
{
  document.getElementById(a_ID).style.visibility = 'visible';
  document.getElementById(a_ID).style.display = 'block';
}

function HideHelperDiv(a_ID)
{
  document.getElementById(a_ID).style.visibility = 'hidden';
  document.getElementById(a_ID).style.display = 'none';
}

// build the helper div to display on mouse over
function BuildHelperDiv(a_DivID, a_IndicatorDivContent, a_Title, a_Text)
{
  var l_Qutput = '';
  l_Qutput += '<span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'' + a_Title + '\', \'' + a_Text + '\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >' + a_IndicatorDivContent + '</span>';
  return l_Qutput;
}

// build the helper div to display on mouse over
function BuildHelperDivLink(a_DivID, a_IndicatorDivContent, a_Title, a_Text, a_SubTopic)
{
  var l_Qutput = '';
  l_Qutput += '<a href="../common/help.php?subtopic=' + a_SubTopic + '" target="_blank" ><span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'' + a_Title + '\', \'' + a_Text + '\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >' + a_IndicatorDivContent + '</span></a>';
  return l_Qutput;
}

// displays a helper div at the current mause position
function ActivateHelperDiv(a_Object, a_Title, a_Text)
{
  var l_Left = (a_Object.offset().left + a_Object.width());
  var l_Top = a_Object.offset().top;
  $('#HelperDivContainer').css('top', l_Top);
  $('#HelperDivContainer').css('left', l_Left);
  $('#HelperDivHeadline').html(a_Title);
  $('#HelperDivText').html(a_Text);
  $('#HelperDivContainer').show();
}

// on mouse over change the play button background image
function PlayNowButton_MouseOver()
{
  $('#ButtonPlayNow').css('background-image', 'url(' + JS_DIR_IMAGES + 'mmorpg/button_playnow_over.png)');
}

// on mouse in change the play button background image
function PlayNowButton_MouseOut()
{
  $('#ButtonPlayNow').css('background-image', 'url(' + JS_DIR_IMAGES + 'mmorpg/button_playnow_idle.png)');
}

// on mouse over decrease opacity of the fade container containing the form
// fields:
// account name, email and password
function FB_CreateAccount_MouseOver()
{
  $('#FadeContainer1').css('filter', 'alpha(opacity=50)');
  $('#FadeContainer1').css('opacity', '0.50');
  $('#FadeContainer1').css('-moz-opacity', '0.50');
}

// on mouse over increase opacity of the fade container containing the form
// fields:
// account name, email and password
function FB_CreateAccount_MouseOut()
{
  $('#FadeContainer1').css('filter', 'alpha(opacity=100)');
  $('#FadeContainer1').css('opacity', '1.00');
  $('#FadeContainer1').css('-moz-opacity', '1.00');
}

// on mouse over decrease opacity of the fade container containing the form
// fields:
// account name, email, password, character name and gender
function FB_Login_MouseOver()
{
  $('#FadeContainer1').css('filter', 'alpha(opacity=50)');
  $('#FadeContainer1').css('opacity', '0.50');
  $('#FadeContainer1').css('-moz-opacity', '0.50');
  $('#FadeContainer2').css('filter', 'alpha(opacity=50)');
  $('#FadeContainer2').css('opacity', '0.50');
  $('#FadeContainer2').css('-moz-opacity', '0.50');
}

// on mouse over decrease opacity of the fade container containing the form
// fields:
// account name, email, password, character name and gender
function FB_Login_MouseOut()
{
  $('#FadeContainer1').css('filter', 'alpha(opacity=100)');
  $('#FadeContainer1').css('opacity', '1.00');
  $('#FadeContainer1').css('-moz-opacity', '1.00');
  $('#FadeContainer2').css('filter', 'alpha(opacity=100)');
  $('#FadeContainer2').css('opacity', '1.00');
  $('#FadeContainer2').css('-moz-opacity', '1.00');
}

// functionality triggered after the HTML document is completly loaded
$(window).load(function()
{
  var InfiniteRotator = {
    init : function(a_Identifier)
    {
      // initial fade-in time
      var l_InitialFadeIn = 1000;
      // time of one loop
      var l_ItemInterval = 10000; // maximum of the value = (l_FadeTime + l_FadeTime + l_Delay)
      // time for fade in and fade out
      var l_FadeTime = 1500;
      // pause between fade out and fade in
      var l_Delay = 3000;
      // number of items
      var l_NumberOfItems = $(a_Identifier).length;
      var l_Max = l_NumberOfItems - 1;
      var l_Min = 0;
      // choose a random start element
      var l_CurrentItem = Math.round(Math.random() * (l_Max - l_Min + 1) - 0.5) + l_Min;
      $(a_Identifier).eq(l_CurrentItem).addClass('CurrentActive');
      // fade in the first element
      $(a_Identifier).eq(l_CurrentItem).delay(l_InitialFadeIn).fadeIn(l_FadeTime);

      var l_IntervalID = setInterval(function()
      {
        var $l_ActiveElement = $('#QuoteSlideshow div.CurrentActive');
        var $l_NextElement = $('#QuoteSlideshow div:first');
        if ($l_ActiveElement.next().length != 0) {
          $l_NextElement = $l_ActiveElement.next();
        }
        $l_NextElement.addClass('NextActive');
        // set all other elements excepte the fading candidates to not visible
        $(a_Identifier).not($('.CurrentActive')).not($('.NextActive')).css({
          display : 'none'
        });
        // console.log($(a_Identifier).not($('.CurrentActive')).not($('.NextActive')));
        // animate fade out
        $l_ActiveElement.fadeOut(l_FadeTime, function()
        {
          $(this).css({
            display : 'none'
          });
        });
        $l_ActiveElement.removeClass('CurrentActive');
        // pause between fade in and fade out
        $l_NextElement.delay(l_Delay);
        // set the next element as the active element
        $l_NextElement.addClass('CurrentActive');
        $l_NextElement.removeClass('NextActive');
        // animate fade in
        $l_NextElement.fadeIn(l_FadeTime);
      }, l_ItemInterval);
    }
  };

  // start rotation
  InfiniteRotator.init('.PlayerQuote');
});