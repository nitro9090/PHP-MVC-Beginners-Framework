/**
 * @author nitro9090
 */

var dropDownButton = document.getElementsByClassName("dropDownButton");
var dropDownDiv = document.getElementsByClassName("dropDownDiv");
var dropDownSign = document.getElementsByClassName("dropDownSign");
var dropDownBlocks = [];

function dropDownClass(dropDownButton, dropDownDiv, dropDownSign) {
    var self = this;
    this.dropDownButton = dropDownButton;
    this.dropDownDiv = dropDownDiv;
    this.dropDownSign = dropDownSign;
    this.dropDownOpen = false;
    this.dropDownDivHeight;

    this.addDropDownListener = function () {
        
        self.dropDownDiv.style.height = "auto";
        self.dropDownDivHeight = self.dropDownDiv.offsetHeight;
        self.dropDownDiv.style.height = "0px";
         self.dropDownDiv.style.overflow = "hidden";

        self.dropDownButton.addEventListener('click', function () {
            if (self.dropDownOpen) {
                self.dropDownDiv.style.height = "0px";
                if (self.dropDownSign) {
                    self.dropDownSign.innerHTML = "<b> + </b>";
                }
                self.dropDownOpen = false;
            }
            else {
                self.dropDownDiv.style.height = self.dropDownDivHeight + "px";
                if (self.dropDownSign) {
                    self.dropDownSign.innerHTML = "<b> - </b>";
                }
                self.dropDownOpen = true;
            }
        }, false);
    };

    this.addUpdDropDownHgtListener = function () {
        window.addEventListener('resize', function () {
            self.dropDownDiv.style.height = "auto";
            self.dropDownDivHeight = self.dropDownDiv.offsetHeight;
            if (self.dropDownOpen === true) {
                self.dropDownDiv.style.height = self.dropDownDivHeight + "px";
            } else {
                self.dropDownDiv.style.height = "0px";
            }
        });
    };
}

for (var i = 0; i < dropDownButton.length; i++) {
    dropDownBlocks[i] = new dropDownClass(dropDownButton[i], dropDownDiv[i], dropDownSign[i]);
    dropDownBlocks[i].addDropDownListener();
    dropDownBlocks[i].addUpdDropDownHgtListener();
}
