// main.js scripts

const test = 1;

console.log(test);

const paramsListsNav = document.querySelector('.create-order-popup__params-lists-nav');

function increaseParamsListNumber() {
let number = 3;

return function() {
return number++;
};
}
const paramsListNumber = increaseParamsListNumber();

    document.addEventListener('alpine:init', () => {
       Alpine.data('paramsList', () => ({
         addParamsList() {
          paramsListsNav.insertAdjacentHTML('beforeend', ` <ul role="list" class="create-order-popup__params-list params-group b-b p-b">
        <li class="create-order-popup__params-list-item number-item t-a-c">
          <span class="create-order-popup__item-number">${paramsListNumber()}</span>
          <div class="create-order-popup__params-list-options-wrapper mobile" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
            <button type="button" class="create-order-popup__params-list-options-btn" x-on:click="toggleDropdown = !toggleDropdown">
              <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"></path>
                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"></path>
                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"></path>
                <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>                    
            </button>
            <ul class="create-order-popup__dropdown-params-list" role="list" x-bind:class="{'active': toggleDropdown === true}">
               <li class="create-order-popup__dropdown-params-list-item">
                   <button class="create-order-popup__dropdown-params-list-item-btn">
                      1
                   </button>
               </li>
               <li class="create-order-popup__dropdown-params-list-item">
                <button class="create-order-popup__dropdown-params-list-item-btn">
                   2
                </button>
               </li>
               <li class="create-order-popup__dropdown-params-list-item">
                <button class="create-order-popup__dropdown-params-list-item-btn">
                   1
                </button>
            </li>
            </ul>
           </div>
        </li>
        <li class="create-order-popup__params-list-item type-item">
          <h4 class="create-order-popup__params-list-item-title">Название</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-select-wrapper" x-data="{toggleArrow: true, toggleSelectList: true, resultInputVal: 'Тип'}" x-on:click="toggleArrow = !toggleArrow;toggleSelectList = !toggleSelectList" x-on:click.outside="toggleArrow = false;toggleSelectList = false">
             <input type="text" class="create-order-popup__form-control-select-result-input" name="form-control-select-result-input" id="form-control-select-result-input 16" value="Тип" readonly x-model="resultInputVal">
             <ul role="list" class="create-order-popup__form-control-select-list" x-bind:class="{'active': toggleSelectList === true}">
               <li class="create-order-popup__form-control-select-list-item">
                 <input type="text" name="Тип" id="Тип" value="Тип" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип'">
               </li>
               <li class="create-order-popup__form-control-select-list-item">
                 <input type="text" name="Тип 1" id="Тип 1" value="Тип 1" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 1'">
               </li>
               <li class="create-order-popup__form-control-select-list-item">
                 <input type="text" name="Тип 2" id="Тип 2" value="Тип 2" readonly class="create-order-popup__form-control-select-list-item-input" x-on:click="resultInputVal = 'Тип 2'">
               </li>
             </ul>
             <svg class="create-order-popup__form-control-select-arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" x-bind:class="{'active': toggleArrow === true}">
               <path d="M1 1L7 7L13 1" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>                  
           </div>
         </div>
        </li>
        <li class="create-order-popup__params-list-item chars-item">
          <h4 class="create-order-popup__params-list-item-title">Хар-ки</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper chars-wrapper">
             <input type="text" class="create-order-popup__form-control-input" value="УВЛ">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item count-item">
          <h4 class="create-order-popup__params-list-item-title">Кол-во</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper count-wrapper">
             <input type="number" class="create-order-popup__form-control-input" value="1">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item weight-item">
          <h4 class="create-order-popup__params-list-item-title">Вес,кг</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper weight-wrapper">
             <input type="number" class="create-order-popup__form-control-input" value="1">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item volume-item">
          <h4 class="create-order-popup__params-list-item-title">Объём, м3</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper volume-wrapper">
             <input type="number" class="create-order-popup__form-control-input" value="1">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item nds-price-item">
          <h4 class="create-order-popup__params-list-item-title">Цена с НДС</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper nds-price-wrapper">
             <input class="create-order-popup__form-control-input" placeholder="0,00" x-mask:dynamic="$money($input, ',')">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item sum-item">
          <h4 class="create-order-popup__params-list-item-title">Сумма</h4>
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper price-wrapper">
             <input class="create-order-popup__form-control-input" placeholder="5 000 000,00" x-mask:dynamic="$money($input, ',')">
           </div>
        </div>
        </li>
        <li class="create-order-popup__params-list-item options-item">
          <div class="create-order-popup__params-list-options-wrapper" x-data="{toggleDropdown: false}" x-on:click.outside="toggleDropdown = false">
               <button type="button" class="create-order-popup__params-list-options-btn" x-on:click="toggleDropdown = !toggleDropdown">
                 <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" fill="#495057"/>
                   <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" fill="#495057"/>
                   <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" fill="#495057"/>
                   <path d="M2 10C2.55228 10 3 9.55228 3 9C3 8.44772 2.55228 8 2 8C1.44772 8 1 8.44772 1 9C1 9.55228 1.44772 10 2 10Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                   <path d="M2 17C2.55228 17 3 16.5523 3 16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                   <path d="M2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2C1 2.55228 1.44772 3 2 3Z" stroke="#161C2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                   </svg>                    
               </button>
               <ul class="create-order-popup__dropdown-params-list" role="list" x-bind:class="{'active': toggleDropdown === true}">
                  <li class="create-order-popup__dropdown-params-list-item">
                      <button class="create-order-popup__dropdown-params-list-item-btn">
                         1
                      </button>
                  </li>
                  <li class="create-order-popup__dropdown-params-list-item">
                   <button class="create-order-popup__dropdown-params-list-item-btn">
                      2
                   </button>
                  </li>
                  <li class="create-order-popup__dropdown-params-list-item">
                   <button class="create-order-popup__dropdown-params-list-item-btn">
                      1
                   </button>
               </li>
               </ul>
          </div>
        </li>
        <li class="create-order-popup__params-list-item name-item">
         <div class="create-order-popup__form-control-group">
           <div class="create-order-popup__form-control-wrapper create-order-popup__form-control-input-wrapper params-name-wrapper">
             <input type="text" class="create-order-popup__form-control-input" placeholder="Наименование">
           </div>
        </div>
        </li>
      </ul>`);
         }
      }))
  })