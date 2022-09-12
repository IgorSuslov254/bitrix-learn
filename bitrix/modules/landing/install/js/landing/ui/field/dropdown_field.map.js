{"version":3,"sources":["dropdown_field.js"],"names":["BX","namespace","setTextContent","Landing","Utils","escapeText","data","offsetTop","offsetLeft","UI","Field","Dropdown","options","this","items","BaseField","apply","arguments","setEventNamespace","subscribeFromOptions","Component","fetchEventsFromOptions","onChangeHandler","onChange","layout","classList","add","popup","input","addEventListener","onInputClick","bind","document","onDocumentClick","rootWindow","PageObject","getRootWindow","hint","header","querySelector","Dom","append","top","Hint","createNode","type","isPlainObject","keys","Object","map","key","name","value","Type","isArrayFilled","Loc","getMessage","content","setValue","prototype","constructor","__proto__","event","stopPropagation","contentRoot","popupRoot","contains","popupWindow","popupContainer","PopupMenuWindow","id","Date","bindElement","bindOptions","forceBindPosition","targetContainer","maxHeight","item","html","text","undefined","onclick","onItemClick","events","onPopupClose","remove","parentElement","appendChild","style","position","isShown","close","show","rect","getBoundingClientRect","left","height","width","postfix","property","onValueChangeHandler","fireEvent","emit","getValue","dataset","forEach","isChanged"],"mappings":"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","file":"dropdown_field.map.js"}