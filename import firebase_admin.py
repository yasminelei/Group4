import firebase_admin
from firebase_admin import credentials, firestore

# Path to your service account key file
cred = credentials.Certificate('path/to/your/serviceAccountKey.json')

# Initialize Firebase Admin SDK
firebase_admin.initialize_app(cred)

# Example: Accessing Firestore database
db = firestore.client()

# Example: Add data to Firestore
doc_ref = db.collection('users').document('user_id')
doc_ref.set({
    'name': 'John Doe',
    'email': 'johndoe@example.com',
    'age': 30
})
