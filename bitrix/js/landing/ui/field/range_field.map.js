{"version":3,"sources":["range_field.js"],"names":["BX","namespace","Landing","UI","Field","Range","data","this","items","type","isArray","values","Collection","BaseCollection","isMultiple","inputInner","createInputInner","container","create","props","className","output","createOutput","sliderFrom","sliderTo","createSlider","sliderValue","createValue","elements","frame","format","postfix","changeHandler","onChange","onValueChangeHandler","onValueChange","dragStartHandler","onDragStart","dragEndHandler","onDragEnd","rootWindow","PageObject","getRootWindow","jsDD","window","value","valueFrom","valueTo","BaseField","apply","arguments","layout","classList","add","stepPercent","length","content","undefined","from","to","onMouseUp","event","stopDrag","bind","Event","top","setValue","prototype","constructor","__proto__","init","input","appendChild","forEach","item","index","valuePercent","valueToPercent","left","valueToLeftPercent","name","onbxdragstart","onbxdrag","onDrag","onbxdragstop","registerObject","requestAnimationFrame","style","transform","onFrameLoad","outputInput","text","children","events","click","onArrowUpClick","onArrowDownClick","result","i","slice","call","document","querySelectorAll","selector","element","find","contains","getStartXOffset","parseFloat","current_node","getBoundingClientRect","width","pageXOffset","offset","x","xx","pip","sliderLeft","lastPos","filter","getValue","property","toPercent","fromPercent","preventEvent","updateValuePosition","Math","min","right","max","innerText","Dom","attr","Text","encode","createInput","isChanged","JSON","stringify"],"mappings":"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","file":"range_field.map.js"}