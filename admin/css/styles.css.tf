html, body {
    padding: 0;
    margin: 0;
    background-color: #000000;
}

br {
    user-select: none;
}

/* width */
::-webkit-scrollbar {
  width: 12px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #000000;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #212121;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #323232;
}

.loading {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 100;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
    display: table;
}

.l {
    display: table-cell;
	vertical-align: middle;
	text-align: center;
	margin: auto;
}

.action-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 64px;
    z-index: 10;
    background-color: #323232;
}

.activity-title {
    font-size: 24px;
    padding: 0;
    margin: 0;
    position: fixed;
    top: 16px;
    left: 16px;
    color: #ffffff;
    user-select: none;
}

.layout {
    margin-top: 64px;
}

.btn-logout {
    position: fixed;
    top: 12px;
    right: 16px;
    width: 120px;
    height: 40px;
    outline: none;
    cursor: pointer;
    border-radius: 20px;
    font-size: 16px;
    color: #db4437;
    background-color: rgba(219, 69, 55, 0.2);
    border: none;
    transition: 0.3s;
    user-select: none;
}

.btn-logout:hover {
    background-color: rgba(219, 69, 55, 0.4);
}

.user {
    font-size: 16px;
    position: fixed;
    top: 20px;
    right: 160px;
    color: #00ff00;
}

.dropdown-text {
    padding: 0;
    margin: 0;
    font-size: 16px;
    user-select: none;
    color: #ffffff;
}

.dropdown-item {
    padding: 16px;
    width: 250px;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 8px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.dropdown-item:hover {
    background-color: #424242;
}

.modal {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 20;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
    display: table;
    transition: 0.3s;
}

.modal-login {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 15;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
    display: table;
    transition: 0.3s;
}

.modal-top {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 35;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
    display: table;
    transition: 0.3s;
}

.modal-important {
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 50;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
    display: table;
    transition: 0.3s;
}

.modal-bg {
    max-width: 960px;
    max-height: calc(100vh - 48px);
    overflow-y: auto;
    overflow-x: none;
    margin: 0 auto;
    background-color: #323232;
    border-radius: 24px;
    padding: 24px;
}

.modal-bg-alert {
    max-width: 400px;
    max-height: calc(100vh - 48px);
    overflow-y: auto;
    overflow-x: none;
    margin: 0 auto;
    background-color: #323232;
    border-radius: 24px;
    padding: 24px;
}

.preview-photo {
    width: 960px;
    height: 360px;
    border-radius: 16px;
    object-fit: cover;
}

.preview-title {
    font-size: 20px;
    width: 936px;
    color: #ffffff;
    text-align: left;
}

.modal-title {
    font-size: 20px;
    width: 100%;
    color: #ffffff;
    text-align: left;
    margin: 0;
    padding: 0;
}

.preview-history {
    font-size: 20px;
    width: 936px;
    color: #ffffff;
    text-align: right;
}

.preview-text {
    font-size: 16px;
    width: 100%;
    color: #acacac;
    text-align: left;
}

.dropdown {
    width: 282px;
    margin: 0 auto;
    padding: 8px;
    background-color: #323232;
    border-radius: 16px;
}

.selector {
    background-color: #323232;
    border-radius: 100pc;
    width: 250px;
    padding: 4px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
}

.selector:hover {
    background-color: #525252;
}

.add-btn {
    background-color: rgba(0, 255, 0, 0.2);
    border-radius: 100pc;
    width: 250px;
    padding: 4px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
    border: none;
    color: #00ff00;
    font-size: 16px;
    transition: 0.3s;
}

.add-btn:hover {
    background-color: rgba(0, 255, 0, 0.4);
}

.selector-name {
    padding: 0;
    margin: 0;
    color: #ffffff;
    font-size: 16px;
    width: 250px;
    text-align: center;
}

.selector-item {
    padding: 0;
    margin: 0;
    color: #cecece;
    font-size: 14px;
    width: 250px;
    text-align: center;
}

.controls {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 24px;
    background-color: #212121;
}

.controls-divider {
    width: 32px;
    height: 1px;
}

.database {
    width: 100%;
    max-width: 960px;
    margin: 0 auto;
    border-collapse: collapse;
}

.database-item {
    padding: 8px;
    border-radius: 8px;
    transition: 0.3s;
}

.database-first-item {
    background-color: #161616;
}

.database-second-item {
    background-color: #202020;
}

.database-item:hover {
    background-color: #323232;
}

.database-text {
    color: #ffffff;
    user-select: none;
    margin: 18px 0;
    font-size: 16px;
}

.btn-view {
    background-color: rgba(59, 118, 255, 0.2);
    border-radius: 100pc;
    padding: 8px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
    border: none;
    color: #3b76ff;
    font-size: 16px;
    transition: 0.3s;
    width: 70px;
}

.btn-view:hover {
    background-color: rgba(59, 118, 255, 0.4);
}

.btn-edit {
    background-color: rgba(255, 128, 0, 0.2);
    border-radius: 100pc;
    padding: 8px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
    border: none;
    color: #ff9900;
    font-size: 16px;
    transition: 0.3s;
    width: 70px;
}

.btn-edit:hover {
    background-color: rgba(255, 128, 0, 0.4);
}

.btn-save {
    background-color: rgba(0, 255, 0, 0.2);
    border-radius: 100pc;
    padding: 8px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
    border: none;
    color: #00ff00;
    font-size: 16px;
    transition: 0.3s;
    width: 70px;
}

.btn-save:hover {
    background-color: rgba(0, 255, 0, 0.4);
}

.btn-remove {
    background-color: rgba(255, 0, 0, 0.2);
    border-radius: 100pc;
    padding: 8px;
    transition: 0.3s;
    user-select: none;
    cursor: pointer;
    border: none;
    color: #ff0000;
    font-size: 16px;
    transition: 0.3s;
    width: 70px;
}

.btn-remove:hover {
    background-color: rgba(255, 0, 0, 0.4);
}

.database-action {
    width: 70px;
    padding: 8px;
}

.item-name {
    padding: 0 16px;
}

.action-buttons {
    display: flex;
    flex-direction: row;
}

.source-control {
    display: flex;
    flex-direction: row;
}

.edit-form {
    width: 100%;
    text-align: left;
}

.field-label {
    color: #ffffff;
    user-select: none;
}

.field {
    margin: 8px;
    width: 250px;
    padding: 8px;
    font-size: 16px;
    outline: none;
    border-radius: 8px;
    color: #ffffff;
    background-color: #323232;
    border: solid 2px #3b76ff;
}

.field:focus {
    background-color: #424242;
    border: solid 2px #ffffff;
}

.danger-text {
    color: #ff3d00;
    user-select: none;
}

.tip-text {
    color: #3b76ff;
    user-select: none;
}

.padding {
    padding: 8px;
}

.n {
    padding: 0;
    margin: 0;
    user-select: none;
}

.dropdown-delete-item {
    color: #ffffff;
    padding: 0;
    margin: 0;
    user-select: none;
}

.dropdown-delete-item:hover {
    color: #ff0000;
}