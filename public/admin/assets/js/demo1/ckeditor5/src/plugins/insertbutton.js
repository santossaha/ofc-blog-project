// import readMoreImage from '../assets/images/insert-button.png';
import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import { ButtonView } from '@ckeditor/ckeditor5-ui';


class InsertButton extends Plugin {
    init() {
        const editor = this.editor;

        editor.ui.componentFactory.add('insertButton', locale => {
            const view = new ButtonView(locale);

            view.set({
                label: 'Insert Button',
                // icon: readMoreImage,
                withText: true,
                tooltip: true
            });

            // Callback executed once the image is clicked.
            view.on('execute', () => {
                const url = prompt('Button link URL');
                const btnName = prompt('Button Name');

                editor.model.change(writer => {
                    // const imageElement = writer.createElement('imageBlock', {
                    //     src: imageUrl
                    // });
                    const link = writer.createText(btnName, {
                        linkHref: url
                    });


                    // Insert the image in the current selection location.
                    editor.model.insertContent(link, editor.model.document.selection);
                });
            });

            return view;
        });
    }
}

export default InsertButton;