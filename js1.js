function main() {
  $(function() {
    var months = prompt("Please Enter Birth Month:", "e.g. January / 1");
    var month;
    var monthName;
    var stone;
    var flower;
    switch (months) {
      case "1":
      case 'January':
        month = "1";
        monthName = "January";
        stone = "Garnet";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/GARNET.jpg",
          'alt': "Garnet"
        });
        flower = "Carnation";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/CARNATION.jpg",
          'alt': "Carnation"
        });
      break;
      case "2":
      case 'February':
        month = "2";
        monthName = "February";
        stone = "Amethyst";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/AMETHYST.jpg",
          'alt': "Amethyst"
        });
        flower = "Violet";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/VIOLET.jpg",
          'alt': "Violet"
        });
      break;
      case "3":
      case 'March':
        month = "3";
        monthName = "March";
        stone = "Aquamarine";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/AQUAMARINE.jpg",
          'alt': "Aquamarine"
        });
        flower = "Jonquil";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/JONQUIL.jpg",
          'alt': "Jonquil"
        });
      break;
      case "4":
      case 'April':
        month = "4";
        monthName = "April";
        stone = "Diamond";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/DIAMOND.jpg",
          'alt': "Diamond"
        });
        flower = "Sweet Pea";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/SWEET PEA.jpg",
          'alt': "Sweet Pea"
        });
      break;
      case "5":
      case 'May':
        month = "5";
        monthName = "May";
        stone = "Emerald";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/EMERALD.jpg",
          'alt': "Emerald"
        });
        flower = "Lily of the Valley";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/LILY OF THE VALLEY.jpg",
          'alt': "Lily of the Valley"
        });
      break;
      case "6":
      case 'June':
        month = "6";
        monthName = "June";
        stone = "Pearl";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/PEARL.jpg",
          'alt': "Pearl"
        });
        flower = "Rose";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/ROSE.jpg",
          'alt': "Rose"
        });
      break;
      case "7":
      case 'July':
        month = "7";
        monthName = "July";
        stone = "Ruby";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/RUBY.jpg",
          'alt': "Ruby"
        });
        flower = "Larkspur";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/LARKSPUR.jpg",
          'alt': "Larkspur"
        });
      break;
      case '8':
      case 'August':
        month = '8';
        monthName = "August";
        stone = "Peridot";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/PERIDOT.jpg",
          'alt': "Peridot"
        });
        flower = "Gladiola";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/GLADIOLA.jpg",
          'alt': "Gladiola"
        });
      break;
      case '9':
      case 'September':
        month = '9';
        monthName = "September";
        stone = "Sapphire";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/SAPPHIRE.jpg",
          'alt': "Sapphire"
        });
        flower = "Aster";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/ASTER.jpg",
          'alt': "Aster"
        });
      break;
      case '10':
      case 'October':
        month = '10';
        monthName = "October";
        stone = "Opal";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/OPAL.jpg",
          'alt': "Opal"
        });
        flower = "Calendula";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/CALENDULA.jpg",
          'alt': "Calendula"
        });
      break;
      case '11':
      case 'November':
        month = '11';
        monthName = "November";
        stone = "Topaz";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/TOPAZ.jpg",
          'alt': "Topaz"
        });
        flower = "Chrysanthemum";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/CHRYSANTHEMUM.jpg",
          'alt': "Chrysanthemum"
        });
      break;
      case "12":
      case 'December':
        month = "12";
        monthName = "December";
        stone = "Turquoise";
        $("#STONE_IMAGE").attr({
          'src': "BirthAtts/TURQUOISE.jpg",
          'alt': "Turquoise"
        });
        flower = "Narcissus";
        $("#FLOWER_IMAGE").attr({
          'src': "BirthAtts/NARCISSUS.jpg",
          'alt': "Narcissus"
        });
      break;
      default:
        month = NaN;
        monthName = "Error";
        window.alert("Please refresh this page. Invalid month entered.")
      break;
    }

    var days = prompt("Please Enter Birth Date:", "e.g. 1, 31");
    var dayint = parseInt(days, 10);
    if(dayint >= 1 && dayint <= 31) {
      console.log("Day: " + dayint + "\nNo problems as of now.");
    }
    else {
      window.alert("Please refresh this page. Invalid day entered.");
      dayint = NaN;
    }

    // Zodiac Signs
    var zodiacx;
    if((month == 3 && (dayint >= 21 && dayint <= 31)) || (month == 4 && (dayint >=1 && dayint <= 19))){
      zodiacx = "Aries";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/ARIES.jpg",
        'alt': "Aries"
      });
    }
    else if ((month == 4 && (dayint >= 20 && dayint <= 30)) || (month == 5 && (dayint >=1 && dayint <= 20))){
      zodiacx = "Taurus";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/TAURUS.jpg",
        'alt': "Taurus"
      });
    }
    else if ((month == 5 && (dayint >= 21 && dayint <= 31)) || (month == 6 && (dayint >=1 && dayint <= 21))){
      zodiacx = "Gemini";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/GEMINI.jpg",
        'alt': "Gemini"
      });
    }
    else if ((month == 6 && (dayint >= 22 && dayint <= 30)) || (month == 7 && (dayint >=1 && dayint <= 21))){
      zodiacx = "Cancer";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/CANCER.jpg",
        'alt': "Cancer"
      });
    }
    else if ((month == 7 && (dayint >= 22 && dayint <= 31)) || (month == 8 && (dayint >=1 && dayint <= 21))){
      zodiacx = "Leo";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/LEO.jpg",
        'alt': "Leo"
      });
    }
    else if ((month == 8 && (dayint >= 22 && dayint <= 31)) || (month == 9 && (dayint >=1 && dayint <= 22))){
      zodiacx = "Virgo";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/VIRGO.jpg",
        'alt': "Virgo"
      });
    }
    else if ((month == 9 && (dayint >= 23 && dayint <= 30)) || (month == 10 && (dayint >=1 && dayint <= 22))){
      zodiacx = "Libra";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/LIBRA.jpg",
        'alt': "Libra"
      });
    }
    else if ((month == 10 && (dayint >= 23 && dayint <= 31)) || (month == 11 && (dayint >=1 && dayint <= 21))){
      zodiacx = "Scorpio";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/SCORPIO.jpg",
        'alt': "Scorpio"
      });
    }
    else if ((month == 11 && (dayint >= 22 && dayint <= 30)) || (month == 12 && (dayint >=1 && dayint <= 21))){
      zodiacx = "Sagittarius";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/SAGITTARIUS.jpg",
        'alt': "Sagittarius"
      });
    }
    else if ((month == 12 && (dayint >= 22 && dayint <= 31)) || (month == 1 && (dayint >=1 && dayint <= 20))){
      zodiacx = "Capricorn";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/CAPRICORN.jpg",
        'alt': "Capricorn"
      });
    }
    else if ((month == 1 && (dayint >= 21 && dayint <= 31)) || (month == 2 && (dayint >=1 && dayint <= 19))){
      zodiacx = "Aquarius";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/AQUARIUS.jpg",
        'alt': "Aquarius"
      });
    }
    else if ((month == 2 && (dayint >= 20 && dayint <= 29)) || (month == 3 && (dayint >=1 && dayint <= 20))){
      zodiacx = "Pisces";
      $("#ZODIAC_IMAGE").attr({
        'src': "BirthAtts/PISCES.jpg",
        'alt': "Pisces"
      });
    }
    else {
      console.log("Zodiac Input Error. \nMonth: " + monthName + "\nDate: " + dayint);
    }
    
    var years = prompt("Please Enter Birth Year:", "e.g. 2018");
      
    var cnZod;
    switch (years) {
      case "1962":
      case "1974":
      case "1986":
      case "1998":
      case "2010":
        cnZod = "Tiger";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/TIGER.jpg",
          'alt': "Year of the Tiger"
        });
      break;
      case "1963":
      case "1975":
      case "1987":
      case "1999":
      case "2011":
        cnZod = "Rabbit";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/RABBIT.jpg",
          'alt': "Year of the Rabbit"
        });
      break;
      case "1964":
      case "1976":
      case "1988":
      case "2000":
      case "2012":
        cnZod = "Dragon";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/DRAGON.jpg",
          'alt': "Year of the Dragon"
        });
      break;
      case "1965":
      case "1977":
      case "1989":
      case "2001":
      case "2013":
        cnZod = "Snake";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/SNAKE.jpg",
          'alt': "Year of the Snake"
        });
      break;
      case "1966":
      case "1978":
      case "1990":
      case "2002":
      case "2014":
        cnZod = "Horse";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/HORSE.jpg",
          'alt': "Year of the Horse"
        });
      break;
      case "1967":
      case "1979":
      case "1991":
      case "2003":
      case "2015":
        cnZod = "Sheep";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/SHEEP.jpg",
          'alt': "Year of the Sheep"
        });
      break;
      case "1968":
      case "1980":
      case "1992":
      case "2004":
      case "2016":
        cnZod = "Monkey";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/MONKEY.jpg",
          'alt': "Year of the Monkey"
        });
      break;
      case "1969":
      case "1981":
      case "1993":
      case "2005":
      case "2017":
        cnZod = "Rooster";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/ROOSTER.jpg",
          'alt': "Year of the Rooster"
        });
      break;
      case "1970":
      case "1982":
      case "1994":
      case "2006":
      case "2018":
        cnZod = "Dog";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/DOG.jpg",
          'alt': "Year of the Dog"
        });
      break;
      case "1971":
      case "1983":
      case "1995":
      case "2007":
      case "2019":
        cnZod = "Pig";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/PIG.jpg",
          'alt': "Year of the Pig"
        });
      break;
      case "1972":
      case "1984":
      case "1996":
      case "2008":
        cnZod = "Rat";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/RAT.jpg",
          'alt': "Year of the Rat"
        });
      break;
      case "1973":
      case "1985":
      case "1997":
      case "2009":
        cnZod = "Ox";
        $("#CNZODIAC_IMAGE").attr({
          'src': "BirthAtts/OX.jpg",
          'alt': "Year of the Ox"
        });
      break;
      default:
        window.alert("Please refresh this page. Invalid year entered/Year entered before 1962 or after 2018.");
      }

    // Outputs
    if(month != NaN && dayint != NaN && (years > 1962 && years < 2020)){
      $("#DATE").text(dayint + " " + monthName + " " + years);
      $("#STONE").text(stone);
      $("#FLOWER").text(flower);
      $("#ZODIAC").text(zodiacx);
      $("#CNZODIAC").text("Year of the " + cnZod);
    }
    else {
      $("#DATE").text("Invalid date input. Please reload the page.");
      $("#STONE_DIV").hide();
      $("#FLOWER_DIV").hide();
      $("#ZODIAC_DIV").hide();
      $("#CNZODIAC_DIV").hide();
      console.log(dayint + " " + monthName + " " + years);
    }
  }); 
}