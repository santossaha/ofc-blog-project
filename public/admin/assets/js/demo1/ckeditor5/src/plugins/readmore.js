import readMoreImage from '../assets/images/read-more.svg';
import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import { ButtonView } from '@ckeditor/ckeditor5-ui';

class ReadMore extends Plugin {
    init() {
        const editor = this.editor;

        editor.ui.componentFactory.add('readMore', locale => {
            const view = new ButtonView(locale);

            view.set({
                label: 'Readmore',
                icon: readMoreImage,
                tooltip: true
            });

            // Callback executed once the image is clicked.
            view.on('execute', () => {
                editor.model.change( writer => {
                    const readMoreElement = writer.createText( '##READ_MORE_BUTTON##' );

                    // Insert the image in the current selection location.
                    editor.model.insertContent( readMoreElement, editor.model.document.selection );
                } );
            });

            return view;
        });
    }
}

export default ReadMore;
