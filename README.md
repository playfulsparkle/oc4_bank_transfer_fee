# OpenCart v4 Bank Transfer fee extension

The **Bank Transfer fee extension** automatically adds a configurable fee to the total order cost during checkout when the customer selects **Bank Transfer** as the payment method.

---

## Features

### Bank Transfer fee Extension
- Adds a customizable fee to the total when **Bank Transfer** is selected during checkout.
- Configurable fee options: fixed amount to be added to the total order value.
- Easy setup via the OpenCart interface.
- Compatible with OpenCart v4.x.

---

## Installation Instructions

### Important note

OpenCart requires all extension package filenames to end in the `.ocmod.zip` format for successful installation. Although the `oc4_banktransferfee` extension is not technically an `OCMOD` (since it contains all the required files to work properly without any `OCMOD` modifications), the package still needs to follow this naming convention to ensure compatibility with OpenCart's installer.

### 1. Download the Extension
Download the latest **Bank Transfer fee** release from this repository.

### 2. Upload the Extension Files
1. Log in to your OpenCart admin panel.
2. Navigate to `Extensions > Installer`.
3. Click the `Upload` button and upload the `banktransferfee.ocmod.zip` file.

### 3. Install the Extension
4. Once uploaded click on the green `Install` button
1. Then navigate  to `Extensions` and select `Order Totals` from the dropdown.
2. Locate the **Bank Transfer fee** extension in the list.
3. Click on the green `Install` button.

### 4. Configure the Extension
1. After installation, remain in the `Extensions` page and ensure `Order Totals` is selected from the dropdown.
2. Click the `Edit` button next to the installed extension.
3. Enter the amount, and setup other settings as per your store's requirements.
4. Save your configuration.

[Upload, install and configure extension](https://github.com/user-attachments/assets/e2b5c3ea-b702-4051-8153-b84a4c5b40a1)

---

## Support & Feedback

For support or any inquiries regarding the extensions, feel free to open an issue on this repository or reach out via email at `support@playfulsparkle.com`.

---

## License

This project is licensed under the GPL-3.0 license. See the [LICENSE](./LICENSE) file for more information.

---

## Contributing

We welcome contributions! If you would like to contribute to this project, please fork the repository and submit a pull request with your changes.
